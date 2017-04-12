<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateSedeRequest;
use App\Http\Requests\UpdateSedeRequest;
use App\Repositories\SedeRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Regional;
use App\Models\municipio;

class SedeController extends AppBaseController
{
    /** @var  SedeRepository */
    private $sedeRepository;

    function __construct(SedeRepository $sedeRepo)
    {
        $this->sedeRepository = $sedeRepo;
    }

    /**
     * Display a listing of the Sede.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sedeRepository->pushCriteria(new RequestCriteria($request));
        $sedes = $this->sedeRepository->paginate(10);

        return view('sedes.index')
            ->with('sedes', $sedes);
    }

    /**
     * Show the form for creating a new Sede.
     *
     * @return Response
     */
    public function create()
    {
        $selectores = [
        'municipios' => municipio::selMunicipio(),
        'regionals'=> Regional::selRegional()
        ];

        return view('sedes.create')->with(['selectores' => $selectores]);
        
    }

    /**
     * Store a newly created Sede in storage.
     *
     * @param CreateSedeRequest $request
     *
     * @return Response
     */
    public function store(CreateSedeRequest $request)
    {
        $input = $request->all();

        $sede = $this->sedeRepository->create($input);

        Flash::success('Sede registrado correctamente.');

        return redirect(route('sedes.index'));
    }

    /**
     * Display the specified Sede.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sede = $this->sedeRepository->findWithoutFail($id);

        if (empty($sede)) {
            Flash::error('Sede No se encuentra en encuentra registrado');

            return redirect(route('sedes.index'));
        }

        return view('sedes.show')->with('sede', $sede);
    }

    /**
     * Show the form for editing the specified Sede.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sede = $this->sedeRepository->findWithoutFail($id);

        if (empty($sede)) {
            Flash::error('Sede No se encuentra en encuentra registrado');

            return redirect(route('sedes.index'));
        }

        $selectores = [
        'municipios' => municipio::selMunicipio(),
        'regionals'=> Regional::selRegional()
        ];

        return view('sedes.edit')->with(['sede' => $sede, 'selectores' => $selectores]);
    }

    /**
     * Update the specified Sede in storage.
     *
     * @param  int              $id
     * @param UpdateSedeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSedeRequest $request)
    {
        $sede = $this->sedeRepository->findWithoutFail($id);

        if (empty($sede)) {
            Flash::error('Sede No se encuentra en encuentra registrado');

            return redirect(route('sedes.index'));
        }

        $sede = $this->sedeRepository->update($request->all(), $id);

        Flash::success('Sede actualizado correctamente.');

        return redirect(route('sedes.index'));
    }

    /**
     * Remove the specified Sede from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sede = $this->sedeRepository->findWithoutFail($id);

        if (empty($sede)) {
            Flash::error('Sede No se encuentra en encuentra registrado');

            return redirect(route('sedes.index'));
        }

        $this->sedeRepository->delete($id);

        Flash::success('Sede eliminado correctamente.');

        return redirect(route('sedes.index'));
    }
}
