<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProyectoAulaRequest;
use App\Http\Requests\UpdateProyectoAulaRequest;
use App\Repositories\ProyectoAulaRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProyectoAulaController extends AppBaseController
{
    /** @var  ProyectoAulaRepository */
    private $proyectoAulaRepository;

    function __construct(ProyectoAulaRepository $proyectoAulaRepo)
    {
        $this->proyectoAulaRepository = $proyectoAulaRepo;
    }

    /**
     * Display a listing of the ProyectoAula.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->proyectoAulaRepository->pushCriteria(new RequestCriteria($request));
        $proyectoAulas = $this->proyectoAulaRepository->paginate(10);

        return view('proyectoAulas.index')
            ->with('proyectoAulas', $proyectoAulas);
    }

    /**
     * Show the form for creating a new ProyectoAula.
     *
     * @return Response
     */
    public function create()
    {
        return view('proyectoAulas.create');
    }

    /**
     * Store a newly created ProyectoAula in storage.
     *
     * @param CreateProyectoAulaRequest $request
     *
     * @return Response
     */
    public function store(CreateProyectoAulaRequest $request)
    {
        $input = $request->all();

        $proyectoAula = $this->proyectoAulaRepository->create($input);

        Flash::success('ProyectoAula registrado correctamente.');

        return redirect(route('proyectoAulas.index'));
    }

    /**
     * Display the specified ProyectoAula.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $proyectoAula = $this->proyectoAulaRepository->findWithoutFail($id);

        if (empty($proyectoAula)) {
            Flash::error('ProyectoAula No se encuentra en encuentra registrado');

            return redirect(route('proyectoAulas.index'));
        }

        return view('proyectoAulas.show')->with('proyectoAula', $proyectoAula);
    }

    /**
     * Show the form for editing the specified ProyectoAula.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $proyectoAula = $this->proyectoAulaRepository->findWithoutFail($id);

        if (empty($proyectoAula)) {
            Flash::error('ProyectoAula No se encuentra en encuentra registrado');

            return redirect(route('proyectoAulas.index'));
        }

        return view('proyectoAulas.edit')->with('proyectoAula', $proyectoAula);
    }

    /**
     * Update the specified ProyectoAula in storage.
     *
     * @param  int              $id
     * @param UpdateProyectoAulaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProyectoAulaRequest $request)
    {
        $proyectoAula = $this->proyectoAulaRepository->findWithoutFail($id);

        if (empty($proyectoAula)) {
            Flash::error('ProyectoAula No se encuentra en encuentra registrado');

            return redirect(route('proyectoAulas.index'));
        }

        $proyectoAula = $this->proyectoAulaRepository->update($request->all(), $id);

        Flash::success('ProyectoAula actualizado correctamente.');

        return redirect(route('proyectoAulas.index'));
    }

    /**
     * Remove the specified ProyectoAula from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $proyectoAula = $this->proyectoAulaRepository->findWithoutFail($id);

        if (empty($proyectoAula)) {
            Flash::error('ProyectoAula No se encuentra en encuentra registrado');

            return redirect(route('proyectoAulas.index'));
        }

        $this->proyectoAulaRepository->delete($id);

        Flash::success('ProyectoAula eliminado correctamente.');

        return redirect(route('proyectoAulas.index'));
    }
}
