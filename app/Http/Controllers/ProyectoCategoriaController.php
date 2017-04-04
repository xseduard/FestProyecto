<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProyectoCategoriaRequest;
use App\Http\Requests\UpdateProyectoCategoriaRequest;
use App\Repositories\ProyectoCategoriaRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProyectoCategoriaController extends AppBaseController
{
    /** @var  ProyectoCategoriaRepository */
    private $proyectoCategoriaRepository;

    function __construct(ProyectoCategoriaRepository $proyectoCategoriaRepo)
    {
        $this->proyectoCategoriaRepository = $proyectoCategoriaRepo;
    }

    /**
     * Display a listing of the ProyectoCategoria.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->proyectoCategoriaRepository->pushCriteria(new RequestCriteria($request));
        $proyectoCategorias = $this->proyectoCategoriaRepository->paginate(10);

        return view('proyectoCategorias.index')
            ->with('proyectoCategorias', $proyectoCategorias);
    }

    /**
     * Show the form for creating a new ProyectoCategoria.
     *
     * @return Response
     */
    public function create()
    {
        return view('proyectoCategorias.create');
    }

    /**
     * Store a newly created ProyectoCategoria in storage.
     *
     * @param CreateProyectoCategoriaRequest $request
     *
     * @return Response
     */
    public function store(CreateProyectoCategoriaRequest $request)
    {
        $input = $request->all();

        $proyectoCategoria = $this->proyectoCategoriaRepository->create($input);

        Flash::success('ProyectoCategoria registrado correctamente.');

        return redirect(route('proyectoCategorias.index'));
    }

    /**
     * Display the specified ProyectoCategoria.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $proyectoCategoria = $this->proyectoCategoriaRepository->findWithoutFail($id);

        if (empty($proyectoCategoria)) {
            Flash::error('ProyectoCategoria No se encuentra en encuentra registrado');

            return redirect(route('proyectoCategorias.index'));
        }

        return view('proyectoCategorias.show')->with('proyectoCategoria', $proyectoCategoria);
    }

    /**
     * Show the form for editing the specified ProyectoCategoria.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $proyectoCategoria = $this->proyectoCategoriaRepository->findWithoutFail($id);

        if (empty($proyectoCategoria)) {
            Flash::error('ProyectoCategoria No se encuentra en encuentra registrado');

            return redirect(route('proyectoCategorias.index'));
        }

        return view('proyectoCategorias.edit')->with('proyectoCategoria', $proyectoCategoria);
    }

    /**
     * Update the specified ProyectoCategoria in storage.
     *
     * @param  int              $id
     * @param UpdateProyectoCategoriaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProyectoCategoriaRequest $request)
    {
        $proyectoCategoria = $this->proyectoCategoriaRepository->findWithoutFail($id);

        if (empty($proyectoCategoria)) {
            Flash::error('ProyectoCategoria No se encuentra en encuentra registrado');

            return redirect(route('proyectoCategorias.index'));
        }

        $proyectoCategoria = $this->proyectoCategoriaRepository->update($request->all(), $id);

        Flash::success('ProyectoCategoria actualizado correctamente.');

        return redirect(route('proyectoCategorias.index'));
    }

    /**
     * Remove the specified ProyectoCategoria from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $proyectoCategoria = $this->proyectoCategoriaRepository->findWithoutFail($id);

        if (empty($proyectoCategoria)) {
            Flash::error('ProyectoCategoria No se encuentra en encuentra registrado');

            return redirect(route('proyectoCategorias.index'));
        }

        $this->proyectoCategoriaRepository->delete($id);

        Flash::success('ProyectoCategoria eliminado correctamente.');

        return redirect(route('proyectoCategorias.index'));
    }
}
