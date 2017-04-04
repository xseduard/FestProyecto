<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateAsignaturasRequest;
use App\Http\Requests\UpdateAsignaturasRequest;
use App\Repositories\AsignaturasRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AsignaturasController extends AppBaseController
{
    /** @var  AsignaturasRepository */
    private $asignaturasRepository;

    function __construct(AsignaturasRepository $asignaturasRepo)
    {
        $this->asignaturasRepository = $asignaturasRepo;
    }

    /**
     * Display a listing of the Asignaturas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->asignaturasRepository->pushCriteria(new RequestCriteria($request));
        $asignaturas = $this->asignaturasRepository->paginate(10);

        return view('asignaturas.index')
            ->with('asignaturas', $asignaturas);
    }

    /**
     * Show the form for creating a new Asignaturas.
     *
     * @return Response
     */
    public function create()
    {
        return view('asignaturas.create');
    }

    /**
     * Store a newly created Asignaturas in storage.
     *
     * @param CreateAsignaturasRequest $request
     *
     * @return Response
     */
    public function store(CreateAsignaturasRequest $request)
    {
        $input = $request->all();

        $asignaturas = $this->asignaturasRepository->create($input);

        Flash::success('Asignaturas registrado correctamente.');

        return redirect(route('asignaturas.index'));
    }

    /**
     * Display the specified Asignaturas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $asignaturas = $this->asignaturasRepository->findWithoutFail($id);

        if (empty($asignaturas)) {
            Flash::error('Asignaturas No se encuentra en encuentra registrado');

            return redirect(route('asignaturas.index'));
        }

        return view('asignaturas.show')->with('asignaturas', $asignaturas);
    }

    /**
     * Show the form for editing the specified Asignaturas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $asignaturas = $this->asignaturasRepository->findWithoutFail($id);

        if (empty($asignaturas)) {
            Flash::error('Asignaturas No se encuentra en encuentra registrado');

            return redirect(route('asignaturas.index'));
        }

        return view('asignaturas.edit')->with('asignaturas', $asignaturas);
    }

    /**
     * Update the specified Asignaturas in storage.
     *
     * @param  int              $id
     * @param UpdateAsignaturasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAsignaturasRequest $request)
    {
        $asignaturas = $this->asignaturasRepository->findWithoutFail($id);

        if (empty($asignaturas)) {
            Flash::error('Asignaturas No se encuentra en encuentra registrado');

            return redirect(route('asignaturas.index'));
        }

        $asignaturas = $this->asignaturasRepository->update($request->all(), $id);

        Flash::success('Asignaturas actualizado correctamente.');

        return redirect(route('asignaturas.index'));
    }

    /**
     * Remove the specified Asignaturas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $asignaturas = $this->asignaturasRepository->findWithoutFail($id);

        if (empty($asignaturas)) {
            Flash::error('Asignaturas No se encuentra en encuentra registrado');

            return redirect(route('asignaturas.index'));
        }

        $this->asignaturasRepository->delete($id);

        Flash::success('Asignaturas eliminado correctamente.');

        return redirect(route('asignaturas.index'));
    }
}
