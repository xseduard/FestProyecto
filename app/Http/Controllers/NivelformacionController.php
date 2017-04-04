<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateNivelformacionRequest;
use App\Http\Requests\UpdateNivelformacionRequest;
use App\Repositories\NivelformacionRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class NivelformacionController extends AppBaseController
{
    /** @var  NivelformacionRepository */
    private $nivelformacionRepository;

    function __construct(NivelformacionRepository $nivelformacionRepo)
    {
        $this->nivelformacionRepository = $nivelformacionRepo;
    }

    /**
     * Display a listing of the Nivelformacion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->nivelformacionRepository->pushCriteria(new RequestCriteria($request));
        $nivelformacions = $this->nivelformacionRepository->paginate(10);

        return view('nivelformacions.index')
            ->with('nivelformacions', $nivelformacions);
    }

    /**
     * Show the form for creating a new Nivelformacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('nivelformacions.create');
    }

    /**
     * Store a newly created Nivelformacion in storage.
     *
     * @param CreateNivelformacionRequest $request
     *
     * @return Response
     */
    public function store(CreateNivelformacionRequest $request)
    {
        $input = $request->all();

        $nivelformacion = $this->nivelformacionRepository->create($input);

        Flash::success('Nivelformacion registrado correctamente.');

        return redirect(route('nivelformacions.index'));
    }

    /**
     * Display the specified Nivelformacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nivelformacion = $this->nivelformacionRepository->findWithoutFail($id);

        if (empty($nivelformacion)) {
            Flash::error('Nivelformacion No se encuentra en encuentra registrado');

            return redirect(route('nivelformacions.index'));
        }

        return view('nivelformacions.show')->with('nivelformacion', $nivelformacion);
    }

    /**
     * Show the form for editing the specified Nivelformacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nivelformacion = $this->nivelformacionRepository->findWithoutFail($id);

        if (empty($nivelformacion)) {
            Flash::error('Nivelformacion No se encuentra en encuentra registrado');

            return redirect(route('nivelformacions.index'));
        }

        return view('nivelformacions.edit')->with('nivelformacion', $nivelformacion);
    }

    /**
     * Update the specified Nivelformacion in storage.
     *
     * @param  int              $id
     * @param UpdateNivelformacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNivelformacionRequest $request)
    {
        $nivelformacion = $this->nivelformacionRepository->findWithoutFail($id);

        if (empty($nivelformacion)) {
            Flash::error('Nivelformacion No se encuentra en encuentra registrado');

            return redirect(route('nivelformacions.index'));
        }

        $nivelformacion = $this->nivelformacionRepository->update($request->all(), $id);

        Flash::success('Nivelformacion actualizado correctamente.');

        return redirect(route('nivelformacions.index'));
    }

    /**
     * Remove the specified Nivelformacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nivelformacion = $this->nivelformacionRepository->findWithoutFail($id);

        if (empty($nivelformacion)) {
            Flash::error('Nivelformacion No se encuentra en encuentra registrado');

            return redirect(route('nivelformacions.index'));
        }

        $this->nivelformacionRepository->delete($id);

        Flash::success('Nivelformacion eliminado correctamente.');

        return redirect(route('nivelformacions.index'));
    }
}
