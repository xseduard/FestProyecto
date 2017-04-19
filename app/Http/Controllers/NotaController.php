<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateNotaRequest;
use App\Http\Requests\UpdateNotaRequest;
use App\Repositories\NotaRepository;
use App\Repositories\ProyectoRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Estado;

class NotaController extends AppBaseController
{
    /** @var  NotaRepository */
    private $notaRepository;
    private $proyectoRepository;

    function __construct(NotaRepository $notaRepo, ProyectoRepository $proyectoRepo)
    {
        $this->middleware('auth');
        $this->notaRepository = $notaRepo;
        $this->proyectoRepository = $proyectoRepo;
    }

    /**
     * Display a listing of the Nota.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->notaRepository->pushCriteria(new RequestCriteria($request));
        $notas = $this->notaRepository->paginate(10);

        return view('notas.index')
            ->with('notas', $notas);
    }

    /**
     * Show the form for creating a new Nota.
     *
     * @return Response
     */
     public function crear($id)
    {

        $proyecto = $this->proyectoRepository->findWithoutFail($id);

        if (empty($proyecto)) {
            Flash::error('Proyecto No se encuentra en encuentra registrado');

            return redirect(route('proyectos.revision_proyectos'));
        }

        $selectores = [
                      
            'estado'=> Estado::selEstado(),
                
        ];

        return view('notas.crear')->with(['proyecto'=>$proyecto, 'id'=>$id, 'selectores'=>$selectores]);
    }
    public function create()
    {
        return view('notas.create');
    }

    /**
     * Store a newly created Nota in storage.
     *
     * @param CreateNotaRequest $request
     *
     * @return Response
     */
    public function store(CreateNotaRequest $request)
    {
        $proyecto = $this->proyectoRepository->findWithoutFail($request->proyecto_id);

        if (empty($proyecto)) {
            Flash::error('Proyecto No se encuentra en encuentra registrado');

            return redirect(route('proyectos.revision_proyectos'));
        }
        
        $nuevo['boo_solicitud_revision']='0';
        $nuevo['estado_id']=$request->estado_id;

        $proyecto = $this->proyectoRepository->update($nuevo, $request->proyecto_id);


        $input = $request->all();

        $nota = $this->notaRepository->create($input);

        Flash::success('Revison Enviada correctamente.');

        return redirect(route('proyectos.revision_proyectos'));
    }

    /**
     * Display the specified Nota.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nota = $this->notaRepository->findWithoutFail($id);

        if (empty($nota)) {
            Flash::error('Nota No se encuentra en encuentra registrado');

            return redirect(route('notas.index'));
        }

        return view('notas.show')->with('nota', $nota);
    }

    /**
     * Show the form for editing the specified Nota.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nota = $this->notaRepository->findWithoutFail($id);

        if (empty($nota)) {
            Flash::error('Nota No se encuentra en encuentra registrado');

            return redirect(route('notas.index'));
        }

        return view('notas.edit')->with('nota', $nota);
    }

    /**
     * Update the specified Nota in storage.
     *
     * @param  int              $id
     * @param UpdateNotaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNotaRequest $request)
    {
        $nota = $this->notaRepository->findWithoutFail($id);

        if (empty($nota)) {
            Flash::error('Nota No se encuentra en encuentra registrado');

            return redirect(route('notas.index'));
        }

        $nota = $this->notaRepository->update($request->all(), $id);

        Flash::success('Nota actualizado correctamente.');

        return redirect(route('notas.index'));
    }

    /**
     * Remove the specified Nota from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nota = $this->notaRepository->findWithoutFail($id);

        if (empty($nota)) {
            Flash::error('Nota No se encuentra en encuentra registrado');

            return redirect(route('notas.index'));
        }

        $this->notaRepository->delete($id);

        Flash::success('Nota eliminado correctamente.');

        return redirect(route('notas.index'));
    }
}
