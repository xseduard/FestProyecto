<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateDocenteRequest;
use App\Http\Requests\UpdateDocenteRequest;
use App\Repositories\DocenteRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DocenteController extends AppBaseController
{
    /** @var  DocenteRepository */
    private $docenteRepository;

    function __construct(DocenteRepository $docenteRepo)
    {
        $this->docenteRepository = $docenteRepo;
    }

    /**
     * Display a listing of the Docente.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->docenteRepository->pushCriteria(new RequestCriteria($request));
        $docentes = $this->docenteRepository->paginate(10);
/*
        $docentes2= $this->docenteRepository->with('academico')->first();
        dd($docentes2);
*/
        return view('docentes.index')
            ->with('docentes', $docentes);
    }

    /**
     * Show the form for creating a new Docente.
     *
     * @return Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created Docente in storage.
     *
     * @param CreateDocenteRequest $request
     *
     * @return Response
     */
    public function store(CreateDocenteRequest $request)
    {
        $input = $request->all();

        $docente = $this->docenteRepository->create($input);

        Flash::success('Docente registrado correctamente.');

        return redirect(route('docentes.index'));
    }

    /**
     * Display the specified Docente.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $docente = $this->docenteRepository->findWithoutFail($id);

        if (empty($docente)) {
            Flash::error('Docente No se encuentra en encuentra registrado');

            return redirect(route('docentes.index'));
        }

        return view('docentes.show')->with('docente', $docente);
    }

    /**
     * Show the form for editing the specified Docente.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $docente = $this->docenteRepository->findWithoutFail($id);

        if (empty($docente)) {
            Flash::error('Docente No se encuentra en encuentra registrado');

            return redirect(route('docentes.index'));
        }

        return view('docentes.edit')->with('docente', $docente);
    }

    /**
     * Update the specified Docente in storage.
     *
     * @param  int              $id
     * @param UpdateDocenteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocenteRequest $request)
    {
        $docente = $this->docenteRepository->findWithoutFail($id);

        if (empty($docente)) {
            Flash::error('Docente No se encuentra en encuentra registrado');

            return redirect(route('docentes.index'));
        }

        $docente = $this->docenteRepository->update($request->all(), $id);

        Flash::success('Docente actualizado correctamente.');

        return redirect(route('docentes.index'));
    }

    /**
     * Remove the specified Docente from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $docente = $this->docenteRepository->findWithoutFail($id);

        if (empty($docente)) {
            Flash::error('Docente No se encuentra en encuentra registrado');

            return redirect(route('docentes.index'));
        }

        $this->docenteRepository->delete($id);

        Flash::success('Docente eliminado correctamente.');

        return redirect(route('docentes.index'));
    }
}
