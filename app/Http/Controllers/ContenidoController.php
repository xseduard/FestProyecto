<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateContenidoRequest;
use App\Http\Requests\UpdateContenidoRequest;
use App\Repositories\ContenidoRepository;
use App\Repositories\ProyectoRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Titulo;

class ContenidoController extends AppBaseController
{
    /** @var  ContenidoRepository */
    private $contenidoRepository;
    private $proyectoRepository;

    function __construct(ContenidoRepository $contenidoRepo, ProyectoRepository $proyectoRepo)
    {
        $this->middleware('auth');
        $this->proyectoRepository = $proyectoRepo;
        $this->contenidoRepository = $contenidoRepo;
    }

    /**
     * Display a listing of the Contenido.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->contenidoRepository->pushCriteria(new RequestCriteria($request));
        $contenidos = $this->contenidoRepository->paginate(10);

        return view('contenidos.index')
            ->with('contenidos', $contenidos);
    }

    /**
     * Show the form for creating a new Contenido.
     *
     * @return Response
     */
     public function crear($id)
    {
        $proyecto = $this->proyectoRepository->findWithoutFail($id);

        if (empty($proyecto)) {
            Flash::error('Proyecto No se encuentra en encuentra registrado');

            return redirect(route('proyectos.index'));
        }

        $titulo = Titulo::infoTitulos();
        $selector_titulo = Titulo::selTitulos();
        
        return view('contenidos.create')->with(['id' => $id, 'titulo' => $titulo, 'selector_titulo' => $selector_titulo]);
    }

    public function create()
    {
        $titulo = Titulo::infoTitulos();
        $selector_titulo = Titulo::selTitulos();

        return view('contenidos.create')->with(['titulo' => $titulo, 'selector_titulo' => $selector_titulo]);
        
    }

    /**
     * Store a newly created Contenido in storage.
     *
     * @param CreateContenidoRequest $request
     *
     * @return Response
     */
    public function store(CreateContenidoRequest $request)
    {
        $input = $request->all();


        $contenido = $this->contenidoRepository->create($input);

         $proyecto = $this->proyectoRepository->findWithoutFail($request->proyecto_id);

        if (empty($proyecto)) {
            Flash::error('Proyecto No se encuentra en encuentra registrado');

            return redirect(route('proyectos.index'));
        }
        
        $nuevo['boo_contenido']='1';

        $proyecto = $this->proyectoRepository->update($nuevo, $request->proyecto_id);


        Flash::success('Contenido registrado correctamente.');

        return redirect(route('proyectos.index'));
    }

    /**
     * Display the specified Contenido.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contenido = $this->contenidoRepository->findWithoutFail($id, ['proyecto_id']);

        if (empty($contenido)) {
            Flash::error('Contenido No se encuentra en encuentra registrado');

            return redirect(route('proyectos.revision_proyectos'));
        }

         $titulo = Titulo::infoTitulos();
        $selector_titulo = Titulo::selTitulos();
        
        return view('contenidos.show')->with(['contenido' => $contenido->first(), 'id' => $id, 'titulo' => $titulo, 'selector_titulo' => $selector_titulo]);

       
    }

    /**
     * Show the form for editing the specified Contenido.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contenido = $this->contenidoRepository->findWithoutFail($id, ['proyecto_id']);

        $proyecto = $this->proyectoRepository->findWithoutFail($id);

        if (empty($proyecto)) {
            Flash::error('Contenido No se encuentra en encuentra registrado');

            return redirect(route('proyectos.index'));
        }

        $titulo = Titulo::infoTitulos();
        $selector_titulo = Titulo::selTitulos();
        
        


        if (empty($contenido)) {
            Flash::error('Contenido No se encuentra en encuentra registrado');

            return redirect(route('contenidos.index'));
        }

        return view('contenidos.edit')->with(['contenido' => $contenido->first(), 'id' => $id, 'proyecto' => $proyecto, 'titulo' => $titulo, 'selector_titulo' => $selector_titulo]);

       
    }

    /**
     * Update the specified Contenido in storage.
     *
     * @param  int              $id
     * @param UpdateContenidoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContenidoRequest $request)
    {
        $contenido = $this->contenidoRepository->findWithoutFail($id);

        if (empty($contenido)) {
            Flash::error('Contenido No se encuentra en encuentra registrado');

            return redirect(route('contenidos.index'));
        }

        $contenido = $this->contenidoRepository->update($request->all(), $id);

        Flash::success('Contenido actualizado correctamente.');

        return redirect(route('proyectos.index'));
    }

    /**
     * Remove the specified Contenido from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contenido = $this->contenidoRepository->findWithoutFail($id);

        if (empty($contenido)) {
            Flash::error('Contenido No se encuentra en encuentra registrado');

            return redirect(route('contenidos.index'));
        }

        $this->contenidoRepository->delete($id);

        Flash::success('Contenido eliminado correctamente.');

        return redirect(route('contenidos.index'));
    }
}
