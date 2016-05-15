<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateRDesarrollaRequest;
use App\Http\Requests\UpdateRDesarrollaRequest;
use App\Repositories\RDesarrollaRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RDesarrollaController extends AppBaseController
{
    /** @var  RDesarrollaRepository */
    private $rDesarrollaRepository;

    function __construct(RDesarrollaRepository $rDesarrollaRepo)
    {
        $this->rDesarrollaRepository = $rDesarrollaRepo;
    }

    /**
     * Display a listing of the RDesarrolla.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->rDesarrollaRepository->pushCriteria(new RequestCriteria($request));
        $rDesarrollas = $this->rDesarrollaRepository->paginate(10);

        return view('rDesarrollas.index')
            ->with('rDesarrollas', $rDesarrollas);
    }

    /**
     * Show the form for creating a new RDesarrolla.
     *
     * @return Response
     */
    public function create()
    {
        return view('rDesarrollas.create');
    }

    /**
     * Store a newly created RDesarrolla in storage.
     *
     * @param CreateRDesarrollaRequest $request
     *
     * @return Response
     */
    public function store(CreateRDesarrollaRequest $request)
    {
        $input = $request->all();

        $rDesarrolla = $this->rDesarrollaRepository->create($input);

        Flash::success('RDesarrolla registrado correctamente.');

        return redirect(route('rDesarrollas.index'));
    }

    /**
     * Display the specified RDesarrolla.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rDesarrolla = $this->rDesarrollaRepository->findWithoutFail($id);

        if (empty($rDesarrolla)) {
            Flash::error('RDesarrolla No se encuentra en encuentra registrado');

            return redirect(route('rDesarrollas.index'));
        }

        return view('rDesarrollas.show')->with('rDesarrolla', $rDesarrolla);
    }

    /**
     * Show the form for editing the specified RDesarrolla.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rDesarrolla = $this->rDesarrollaRepository->findWithoutFail($id);

        if (empty($rDesarrolla)) {
            Flash::error('RDesarrolla No se encuentra en encuentra registrado');

            return redirect(route('rDesarrollas.index'));
        }

        return view('rDesarrollas.edit')->with('rDesarrolla', $rDesarrolla);
    }

    /**
     * Update the specified RDesarrolla in storage.
     *
     * @param  int              $id
     * @param UpdateRDesarrollaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRDesarrollaRequest $request)
    {
        $rDesarrolla = $this->rDesarrollaRepository->findWithoutFail($id);

        if (empty($rDesarrolla)) {
            Flash::error('RDesarrolla No se encuentra en encuentra registrado');

            return redirect(route('rDesarrollas.index'));
        }

        $rDesarrolla = $this->rDesarrollaRepository->update($request->all(), $id);

        Flash::success('RDesarrolla actualizado correctamente.');

        return redirect(route('rDesarrollas.index'));
    }

    /**
     * Remove the specified RDesarrolla from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rDesarrolla = $this->rDesarrollaRepository->findWithoutFail($id);

        if (empty($rDesarrolla)) {
            Flash::error('RDesarrolla No se encuentra en encuentra registrado');

            return redirect(route('rDesarrollas.index'));
        }

        $this->rDesarrollaRepository->delete($id);

        Flash::success('RDesarrolla eliminado correctamente.');

        return redirect(route('rDesarrollas.index'));
    }
}
