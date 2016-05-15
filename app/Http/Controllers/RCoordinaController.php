<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateRCoordinaRequest;
use App\Http\Requests\UpdateRCoordinaRequest;
use App\Repositories\RCoordinaRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RCoordinaController extends AppBaseController
{
    /** @var  RCoordinaRepository */
    private $rCoordinaRepository;

    function __construct(RCoordinaRepository $rCoordinaRepo)
    {
        $this->rCoordinaRepository = $rCoordinaRepo;
    }

    /**
     * Display a listing of the RCoordina.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->rCoordinaRepository->pushCriteria(new RequestCriteria($request));
        $rCoordinas = $this->rCoordinaRepository->paginate(10);

        return view('rCoordinas.index')
            ->with('rCoordinas', $rCoordinas);
    }

    /**
     * Show the form for creating a new RCoordina.
     *
     * @return Response
     */
    public function create()
    {
        return view('rCoordinas.create');
    }

    /**
     * Store a newly created RCoordina in storage.
     *
     * @param CreateRCoordinaRequest $request
     *
     * @return Response
     */
    public function store(CreateRCoordinaRequest $request)
    {
        $input = $request->all();

        $rCoordina = $this->rCoordinaRepository->create($input);

        Flash::success('RCoordina registrado correctamente.');

        return redirect(route('rCoordinas.index'));
    }

    /**
     * Display the specified RCoordina.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rCoordina = $this->rCoordinaRepository->findWithoutFail($id);

        if (empty($rCoordina)) {
            Flash::error('RCoordina No se encuentra en encuentra registrado');

            return redirect(route('rCoordinas.index'));
        }

        return view('rCoordinas.show')->with('rCoordina', $rCoordina);
    }

    /**
     * Show the form for editing the specified RCoordina.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rCoordina = $this->rCoordinaRepository->findWithoutFail($id);

        if (empty($rCoordina)) {
            Flash::error('RCoordina No se encuentra en encuentra registrado');

            return redirect(route('rCoordinas.index'));
        }

        return view('rCoordinas.edit')->with('rCoordina', $rCoordina);
    }

    /**
     * Update the specified RCoordina in storage.
     *
     * @param  int              $id
     * @param UpdateRCoordinaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRCoordinaRequest $request)
    {
        $rCoordina = $this->rCoordinaRepository->findWithoutFail($id);

        if (empty($rCoordina)) {
            Flash::error('RCoordina No se encuentra en encuentra registrado');

            return redirect(route('rCoordinas.index'));
        }

        $rCoordina = $this->rCoordinaRepository->update($request->all(), $id);

        Flash::success('RCoordina actualizado correctamente.');

        return redirect(route('rCoordinas.index'));
    }

    /**
     * Remove the specified RCoordina from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rCoordina = $this->rCoordinaRepository->findWithoutFail($id);

        if (empty($rCoordina)) {
            Flash::error('RCoordina No se encuentra en encuentra registrado');

            return redirect(route('rCoordinas.index'));
        }

        $this->rCoordinaRepository->delete($id);

        Flash::success('RCoordina eliminado correctamente.');

        return redirect(route('rCoordinas.index'));
    }
}
