<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateEstudianteRequest;
use App\Http\Requests\UpdateEstudianteRequest;
use App\Repositories\EstudianteRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EstudianteController extends AppBaseController
{
    /** @var  EstudianteRepository */
    private $estudianteRepository;

    function __construct(EstudianteRepository $estudianteRepo)
    {
        $this->estudianteRepository = $estudianteRepo;
    }

    /**
     * Display a listing of the Estudiante.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estudianteRepository->pushCriteria(new RequestCriteria($request));
        $estudiantes = $this->estudianteRepository->paginate(10);

        return view('estudiantes.index')
            ->with('estudiantes', $estudiantes);
    }

    /**
     * Show the form for creating a new Estudiante.
     *
     * @return Response
     */
    public function create()
    {
        return view('estudiantes.create');
    }

    /**
     * Store a newly created Estudiante in storage.
     *
     * @param CreateEstudianteRequest $request
     *
     * @return Response
     */
    public function store(CreateEstudianteRequest $request)
    {
        $input = $request->all();

        $estudiante = $this->estudianteRepository->create($input);

        Flash::success('Estudiante registrado correctamente.');

        return redirect(route('estudiantes.index'));
    }

    /**
     * Display the specified Estudiante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estudiante = $this->estudianteRepository->findWithoutFail($id);

        if (empty($estudiante)) {
            Flash::error('Estudiante No se encuentra en encuentra registrado');

            return redirect(route('estudiantes.index'));
        }

        return view('estudiantes.show')->with('estudiante', $estudiante);
    }

    /**
     * Show the form for editing the specified Estudiante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estudiante = $this->estudianteRepository->findWithoutFail($id);

        if (empty($estudiante)) {
            Flash::error('Estudiante No se encuentra en encuentra registrado');

            return redirect(route('estudiantes.index'));
        }

        return view('estudiantes.edit')->with('estudiante', $estudiante);
    }

    /**
     * Update the specified Estudiante in storage.
     *
     * @param  int              $id
     * @param UpdateEstudianteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstudianteRequest $request)
    {
        $estudiante = $this->estudianteRepository->findWithoutFail($id);

        if (empty($estudiante)) {
            Flash::error('Estudiante No se encuentra en encuentra registrado');

            return redirect(route('estudiantes.index'));
        }

        $estudiante = $this->estudianteRepository->update($request->all(), $id);

        Flash::success('Estudiante actualizado correctamente.');

        return redirect(route('estudiantes.index'));
    }

    /**
     * Remove the specified Estudiante from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estudiante = $this->estudianteRepository->findWithoutFail($id);

        if (empty($estudiante)) {
            Flash::error('Estudiante No se encuentra en encuentra registrado');

            return redirect(route('estudiantes.index'));
        }

        $this->estudianteRepository->delete($id);

        Flash::success('Estudiante eliminado correctamente.');

        return redirect(route('estudiantes.index'));
    }
}
