<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateEStudiantesRequest;
use App\Http\Requests\UpdateEStudiantesRequest;
use App\Repositories\EStudiantesRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EStudiantesController extends AppBaseController
{
    /** @var  EStudiantesRepository */
    private $eStudiantesRepository;

    function __construct(EStudiantesRepository $eStudiantesRepo)
    {
        $this->eStudiantesRepository = $eStudiantesRepo;
    }

    /**
     * Display a listing of the EStudiantes.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->eStudiantesRepository->pushCriteria(new RequestCriteria($request));
        $eStudiantes = $this->eStudiantesRepository->paginate(10);

        return view('eStudiantes.index')
            ->with('eStudiantes', $eStudiantes);
    }

    /**
     * Show the form for creating a new EStudiantes.
     *
     * @return Response
     */
    public function create()
    {
        return view('eStudiantes.create');
    }

    /**
     * Store a newly created EStudiantes in storage.
     *
     * @param CreateEStudiantesRequest $request
     *
     * @return Response
     */
    public function store(CreateEStudiantesRequest $request)
    {
        $input = $request->all();

        $eStudiantes = $this->eStudiantesRepository->create($input);

        Flash::success('EStudiantes registrado correctamente.');

        return redirect(route('eStudiantes.index'));
    }

    /**
     * Display the specified EStudiantes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $eStudiantes = $this->eStudiantesRepository->findWithoutFail($id);

        if (empty($eStudiantes)) {
            Flash::error('EStudiantes No se encuentra en encuentra registrado');

            return redirect(route('eStudiantes.index'));
        }

        return view('eStudiantes.show')->with('eStudiantes', $eStudiantes);
    }

    /**
     * Show the form for editing the specified EStudiantes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $eStudiantes = $this->eStudiantesRepository->findWithoutFail($id);

        if (empty($eStudiantes)) {
            Flash::error('EStudiantes No se encuentra en encuentra registrado');

            return redirect(route('eStudiantes.index'));
        }

        return view('eStudiantes.edit')->with('eStudiantes', $eStudiantes);
    }

    /**
     * Update the specified EStudiantes in storage.
     *
     * @param  int              $id
     * @param UpdateEStudiantesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEStudiantesRequest $request)
    {
        $eStudiantes = $this->eStudiantesRepository->findWithoutFail($id);

        if (empty($eStudiantes)) {
            Flash::error('EStudiantes No se encuentra en encuentra registrado');

            return redirect(route('eStudiantes.index'));
        }

        $eStudiantes = $this->eStudiantesRepository->update($request->all(), $id);

        Flash::success('EStudiantes actualizado correctamente.');

        return redirect(route('eStudiantes.index'));
    }

    /**
     * Remove the specified EStudiantes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $eStudiantes = $this->eStudiantesRepository->findWithoutFail($id);

        if (empty($eStudiantes)) {
            Flash::error('EStudiantes No se encuentra en encuentra registrado');

            return redirect(route('eStudiantes.index'));
        }

        $this->eStudiantesRepository->delete($id);

        Flash::success('EStudiantes eliminado correctamente.');

        return redirect(route('eStudiantes.index'));
    }
}
