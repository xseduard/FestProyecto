<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateGrupo_InvestigacionRequest;
use App\Http\Requests\UpdateGrupo_InvestigacionRequest;
use App\Repositories\Grupo_InvestigacionRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Grupo_InvestigacionController extends AppBaseController
{
    /** @var  Grupo_InvestigacionRepository */
    private $grupoInvestigacionRepository;

    function __construct(Grupo_InvestigacionRepository $grupoInvestigacionRepo)
    {
        $this->middleware('auth');
        $this->grupoInvestigacionRepository = $grupoInvestigacionRepo;
    }

    /**
     * Display a listing of the Grupo_Investigacion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->grupoInvestigacionRepository->pushCriteria(new RequestCriteria($request));
        $grupoInvestigacions = $this->grupoInvestigacionRepository->paginate(10);

        return view('grupoInvestigacions.index')
            ->with('grupoInvestigacions', $grupoInvestigacions);
    }

    /**
     * Show the form for creating a new Grupo_Investigacion.
     *
     * @return Response
     */
    public function create()
    {
        $i = 1965;
        $array['']= "seleccione...";
        while ($i <= date('Y')) {            
            $array[$i]=$i;
            $i++;
        }
        return view('grupoInvestigacions.create')->with('array', $array);
    }

    /**
     * Store a newly created Grupo de Investigación in storage.
     *
     * @param CreateGrupo_InvestigacionRequest $request
     *
     * @return Response
     */
    public function store(CreateGrupo_InvestigacionRequest $request)
    {
        $input = $request->all();

        $grupoInvestigacion = $this->grupoInvestigacionRepository->create($input);

        Flash::success('Grupo de Investigación registrado correctamente.');

        return redirect(route('grupoInvestigacions.index'));
    }

    /**
     * Display the specified Grupo_Investigacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $grupoInvestigacion = $this->grupoInvestigacionRepository->findWithoutFail($id);

        if (empty($grupoInvestigacion)) {
            Flash::error('Grupo de Investigación No se encuentra en encuentra registrado');

            return redirect(route('grupoInvestigacions.index'));
        }

        return view('grupoInvestigacions.show')->with('grupoInvestigacion', $grupoInvestigacion);
    }

    /**
     * Show the form for editing the specified Grupo_Investigacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $grupoInvestigacion = $this->grupoInvestigacionRepository->findWithoutFail($id);

        if (empty($grupoInvestigacion)) {
            Flash::error('Grupo de Investigación No se encuentra en encuentra registrado');

            return redirect(route('grupoInvestigacions.index'));
        }

        $i = 1965;
        $array['']= "seleccione...";
        while ($i <= date('Y')) {            
            $array[$i]=$i;
            $i++;
        }
        return view('grupoInvestigacions.edit')->with(['array' => $array, 'grupoInvestigacion' => $grupoInvestigacion]);


    }

    /**
     * Update the specified Grupo de Investigación in storage.
     *
     * @param  int              $id
     * @param UpdateGrupo_InvestigacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGrupo_InvestigacionRequest $request)
    {
        $grupoInvestigacion = $this->grupoInvestigacionRepository->findWithoutFail($id);

        if (empty($grupoInvestigacion)) {
            Flash::error('Grupo de Investigación No se encuentra en encuentra registrado');

            return redirect(route('grupoInvestigacions.index'));
        }

        $grupoInvestigacion = $this->grupoInvestigacionRepository->update($request->all(), $id);

        Flash::success('Grupo de Investigación actualizado correctamente.');

        return redirect(route('grupoInvestigacions.index'));
    }

    /**
     * Remove the specified Grupo de Investigación from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $grupoInvestigacion = $this->grupoInvestigacionRepository->findWithoutFail($id);

        if (empty($grupoInvestigacion)) {
            Flash::error('Grupo de Investigación No se encuentra en encuentra registrado');

            return redirect(route('grupoInvestigacions.index'));
        }

        $this->grupoInvestigacionRepository->delete($id);

        Flash::success('Grupo de Investigación eliminado correctamente.');

        return redirect(route('grupoInvestigacions.index'));
    }
}
