<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateDoncenciaRequest;
use App\Http\Requests\UpdateDoncenciaRequest;
use App\Repositories\DoncenciaRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DoncenciaController extends AppBaseController
{
    /** @var  DoncenciaRepository */
    private $doncenciaRepository;

    function __construct(DoncenciaRepository $doncenciaRepo)
    {
        $this->doncenciaRepository = $doncenciaRepo;
    }

    /**
     * Display a listing of the Doncencia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->doncenciaRepository->pushCriteria(new RequestCriteria($request));
        $doncencias = $this->doncenciaRepository->paginate(10);

        return view('doncencias.index')
            ->with('doncencias', $doncencias);
    }

    /**
     * Show the form for creating a new Doncencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('doncencias.create');
    }

    /**
     * Store a newly created Doncencia in storage.
     *
     * @param CreateDoncenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateDoncenciaRequest $request)
    {
        $input = $request->all();

        $doncencia = $this->doncenciaRepository->create($input);

        Flash::success('Doncencia registrado correctamente.');

        return redirect(route('doncencias.index'));
    }

    /**
     * Display the specified Doncencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $doncencia = $this->doncenciaRepository->findWithoutFail($id);

        if (empty($doncencia)) {
            Flash::error('Doncencia No se encuentra en encuentra registrado');

            return redirect(route('doncencias.index'));
        }

        return view('doncencias.show')->with('doncencia', $doncencia);
    }

    /**
     * Show the form for editing the specified Doncencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $doncencia = $this->doncenciaRepository->findWithoutFail($id);

        if (empty($doncencia)) {
            Flash::error('Doncencia No se encuentra en encuentra registrado');

            return redirect(route('doncencias.index'));
        }

        return view('doncencias.edit')->with('doncencia', $doncencia);
    }

    /**
     * Update the specified Doncencia in storage.
     *
     * @param  int              $id
     * @param UpdateDoncenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDoncenciaRequest $request)
    {
        $doncencia = $this->doncenciaRepository->findWithoutFail($id);

        if (empty($doncencia)) {
            Flash::error('Doncencia No se encuentra en encuentra registrado');

            return redirect(route('doncencias.index'));
        }

        $doncencia = $this->doncenciaRepository->update($request->all(), $id);

        Flash::success('Doncencia actualizado correctamente.');

        return redirect(route('doncencias.index'));
    }

    /**
     * Remove the specified Doncencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $doncencia = $this->doncenciaRepository->findWithoutFail($id);

        if (empty($doncencia)) {
            Flash::error('Doncencia No se encuentra en encuentra registrado');

            return redirect(route('doncencias.index'));
        }

        $this->doncenciaRepository->delete($id);

        Flash::success('Doncencia eliminado correctamente.');

        return redirect(route('doncencias.index'));
    }
}
