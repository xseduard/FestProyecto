<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProgramaRequest;
use App\Http\Requests\UpdateProgramaRequest;
use App\Repositories\ProgramaRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProgramaController extends AppBaseController
{
    /** @var  ProgramaRepository */
    private $programaRepository;

    function __construct(ProgramaRepository $programaRepo)
    {
        $this->programaRepository = $programaRepo;
    }

    /**
     * Display a listing of the Programa.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->programaRepository->pushCriteria(new RequestCriteria($request));
        $programas = $this->programaRepository->paginate(10);

        return view('programas.index')
            ->with('programas', $programas);
    }

    /**
     * Show the form for creating a new Programa.
     *
     * @return Response
     */
    public function create()
    {
        return view('programas.create');
    }

    /**
     * Store a newly created Programa in storage.
     *
     * @param CreateProgramaRequest $request
     *
     * @return Response
     */
    public function store(CreateProgramaRequest $request)
    {
        $input = $request->all();

        $programa = $this->programaRepository->create($input);

        Flash::success('Programa Registrado correctamente.');

        return redirect(route('programas.index'));
    }

    /**
     * Display the specified Programa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $programa = $this->programaRepository->findWithoutFail($id);

        if (empty($programa)) {
            Flash::error('Programa No se encuentra en encuentra registrado');

            return redirect(route('programas.index'));
        }

        return view('programas.show')->with('programa', $programa);
    }

    /**
     * Show the form for editing the specified Programa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $programa = $this->programaRepository->findWithoutFail($id);

        if (empty($programa)) {
            Flash::error('Programa No se encuentra en encuentra registrado');

            return redirect(route('programas.index'));
        }

        return view('programas.edit')->with('programa', $programa);
    }

    /**
     * Update the specified Programa in storage.
     *
     * @param  int              $id
     * @param UpdateProgramaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProgramaRequest $request)
    {
        $programa = $this->programaRepository->findWithoutFail($id);

        if (empty($programa)) {
            Flash::error('Programa No se encuentra en encuentra registrado');

            return redirect(route('programas.index'));
        }

        $programa = $this->programaRepository->update($request->all(), $id);

        Flash::success('Programa Actualizado correctamente.');

        return redirect(route('programas.index'));
    }

    /**
     * Remove the specified Programa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $programa = $this->programaRepository->findWithoutFail($id);

        if (empty($programa)) {
            Flash::error('Programa No se encuentra en encuentra registrado');

            return redirect(route('programas.index'));
        }

        $this->programaRepository->delete($id);

        Flash::success('Programa Eliminado correctamente.');

        return redirect(route('programas.index'));
    }
}
