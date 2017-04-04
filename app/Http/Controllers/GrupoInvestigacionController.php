<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateGrupoInvestigacionRequest;
use App\Http\Requests\UpdateGrupoInvestigacionRequest;
use App\Repositories\GrupoInvestigacionRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class GrupoInvestigacionController extends AppBaseController
{
    /** @var  GrupoInvestigacionRepository */
    private $grupoInvestigacionRepository;

    function __construct(GrupoInvestigacionRepository $grupoInvestigacionRepo)
    {
        $this->grupoInvestigacionRepository = $grupoInvestigacionRepo;
    }

    /**
     * Display a listing of the GrupoInvestigacion.
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
     * Show the form for creating a new GrupoInvestigacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('grupoInvestigacions.create');
    }

    /**
     * Store a newly created GrupoInvestigacion in storage.
     *
     * @param CreateGrupoInvestigacionRequest $request
     *
     * @return Response
     */
    public function store(CreateGrupoInvestigacionRequest $request)
    {
        $input = $request->all();

        $grupoInvestigacion = $this->grupoInvestigacionRepository->create($input);

        Flash::success('GrupoInvestigacion registrado correctamente.');

        return redirect(route('grupoInvestigacions.index'));
    }

    /**
     * Display the specified GrupoInvestigacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $grupoInvestigacion = $this->grupoInvestigacionRepository->findWithoutFail($id);

        if (empty($grupoInvestigacion)) {
            Flash::error('GrupoInvestigacion No se encuentra en encuentra registrado');

            return redirect(route('grupoInvestigacions.index'));
        }

        return view('grupoInvestigacions.show')->with('grupoInvestigacion', $grupoInvestigacion);
    }

    /**
     * Show the form for editing the specified GrupoInvestigacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $grupoInvestigacion = $this->grupoInvestigacionRepository->findWithoutFail($id);

        if (empty($grupoInvestigacion)) {
            Flash::error('GrupoInvestigacion No se encuentra en encuentra registrado');

            return redirect(route('grupoInvestigacions.index'));
        }

        return view('grupoInvestigacions.edit')->with('grupoInvestigacion', $grupoInvestigacion);
    }

    /**
     * Update the specified GrupoInvestigacion in storage.
     *
     * @param  int              $id
     * @param UpdateGrupoInvestigacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGrupoInvestigacionRequest $request)
    {
        $grupoInvestigacion = $this->grupoInvestigacionRepository->findWithoutFail($id);

        if (empty($grupoInvestigacion)) {
            Flash::error('GrupoInvestigacion No se encuentra en encuentra registrado');

            return redirect(route('grupoInvestigacions.index'));
        }

        $grupoInvestigacion = $this->grupoInvestigacionRepository->update($request->all(), $id);

        Flash::success('GrupoInvestigacion actualizado correctamente.');

        return redirect(route('grupoInvestigacions.index'));
    }

    /**
     * Remove the specified GrupoInvestigacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $grupoInvestigacion = $this->grupoInvestigacionRepository->findWithoutFail($id);

        if (empty($grupoInvestigacion)) {
            Flash::error('GrupoInvestigacion No se encuentra en encuentra registrado');

            return redirect(route('grupoInvestigacions.index'));
        }

        $this->grupoInvestigacionRepository->delete($id);

        Flash::success('GrupoInvestigacion eliminado correctamente.');

        return redirect(route('grupoInvestigacions.index'));
    }
}
