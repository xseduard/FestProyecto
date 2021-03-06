<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProyectoRequest;
use App\Http\Requests\UpdateProyectoRequest;
use App\Models\Estado;
use App\Models\EventoExpo;
use App\Models\GrupoJurado;
use App\Models\Linea_Investigacion;
use App\Models\Proyecto;
use App\Models\Regional;
use App\Models\Semillero;
use App\Models\area;
use App\Models\programa;
use App\Repositories\ProyectoRepository;
use App\User;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;


class ProyectoController extends AppBaseController
{
    /** @var  ProyectoRepository */
    private $proyectoRepository;

    function __construct(ProyectoRepository $proyectoRepo)
    {
        $this->middleware('auth');
        $this->proyectoRepository = $proyectoRepo;
    }

    /**
     * Display a listing of the Proyecto.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if (auth()->user()->role == 'estudiante') {
            $proyectos = Proyecto::where('user_id', auth()->id())->paginate(10);
        } else {
            $this->proyectoRepository->pushCriteria(new RequestCriteria($request));
            $proyectos = $this->proyectoRepository->paginate(10);
        }

        $selectores = [
            'regional' => Regional::selRegional(),
            'semillero'=> Semillero::selSemillero(),
            'area'=> area::selArea(),
            'programa'=> programa::selPrograma(),            
            'estado'=> Estado::selEstado(),
            'linea'=> Linea_Investigacion::selLinea(),
            'grupojurado'=> GrupoJurado::selGrupoJurado()        
        ];
        return view('proyectos.index')->with(['proyectos' => $proyectos, 'selectores' => $selectores]);
       
    }
/**
 * revision proyectos funcion
 */

    public function revision_proyectos(request $request)
    {

        $proyectos = $this->proyectoRepository->paginate(10);

        $selectores = [
            'regional' => Regional::selRegional(),
            'semillero'=> Semillero::selSemillero(),
            'area'=> area::selArea(),
            'programa'=> programa::selPrograma(),
            'evento' => EventoExpo::selEvento(),            
            'estado'=> Estado::selEstado(),
            'linea'=> Linea_Investigacion::selLinea(),
            'grupojurado'=> GrupoJurado::selGrupoJurado()        
        ];
        return view('proyectos.index_revision')->with(['proyectos' => $proyectos, 'selectores' => $selectores]);
        
       
    }
    /**
     * Show the form for creating a new Proyecto.
     *
     * @return Response
     */
    public function create()
    {

        $selectores = [
            'regional' => Regional::selRegional(),
            'semillero'=> Semillero::selSemillero(),
            'area'=> area::selArea(),
            'programa'=> programa::selPrograma(),            
            'estado'=> Estado::selEstado(),
            'linea'=> Linea_Investigacion::selLinea(),
            'grupojurado'=> GrupoJurado::selGrupoJurado()        
        ];
        return view('proyectos.create')->with(['selectores' => $selectores]);
       
    }

    /**
     * Store a newly created Proyecto in storage.
     *
     * @param CreateProyectoRequest $request
     *
     * @return Response
     */
    public function store(CreateProyectoRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::id();
        $input['estado_id'] = '1';
        $input['grupojurado_id'] = '1';
        $input['evento_expo_id'] = '1';       
        
       

        $proyecto = $this->proyectoRepository->create($input);

        Flash::success('Proyecto registrado correctamente.');

        return redirect(route('proyectos.index'));
    }

    /**
     * Display the specified Proyecto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $proyecto = $this->proyectoRepository->findWithoutFail($id);

        if (empty($proyecto)) {
            Flash::error('Proyecto No se encuentra en encuentra registrado');

            return redirect(route('proyectos.index'));
        }

        return view('proyectos.show')->with('proyecto', $proyecto);
    }

    /**
     * Show the form for editing the specified Proyecto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $proyecto = $this->proyectoRepository->findWithoutFail($id);

        if (empty($proyecto)) {
            Flash::error('Proyecto No se encuentra en encuentra registrado');

            return redirect(route('proyectos.index'));
        }
        $selectores = [
            'regional' => Regional::selRegional(),
            'semillero'=> Semillero::selSemillero(),
            'area'=> area::selArea(),
            'programa'=> programa::selPrograma(),            
            'estado'=> Estado::selEstado(),
            'linea'=> Linea_Investigacion::selLinea(),
            'grupojurado'=> GrupoJurado::selGrupoJurado()        
        ];

        return view('proyectos.edit')->with(['proyecto' => $proyecto, 'selectores' => $selectores]);
    }

    /**
     * Update the specified Proyecto in storage.
     *
     * @param  int              $id
     * @param UpdateProyectoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProyectoRequest $request)
    {
        $proyecto = $this->proyectoRepository->findWithoutFail($id);

        if (empty($proyecto)) {
            Flash::error('Proyecto No se encuentra en encuentra registrado');

            return redirect(route('proyectos.index'));
        }

        $proyecto = $this->proyectoRepository->update($request->all(), $id);

        Flash::success('Proyecto actualizado correctamente.');

        return redirect(route('proyectos.index'));
    }

    /**
     * Remove the specified Proyecto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $proyecto = $this->proyectoRepository->findWithoutFail($id);

        if (empty($proyecto)) {
            Flash::error('Proyecto No se encuentra en encuentra registrado');

            return redirect(route('proyectos.index'));
        }

        $this->proyectoRepository->delete($id);

        Flash::success('Proyecto eliminado correctamente.');

        return redirect(route('proyectos.index'));
    }

    public function solicitarRevision($id)
    {
        $proyecto = $this->proyectoRepository->findWithoutFail($id);

        if (empty($proyecto)) {
            Flash::error('Proyecto No se encuentra en encuentra registrado');

            return redirect(route('proyectos.index'));
        }
        
        $nuevo['boo_solicitud_revision']='1';

        $proyecto = $this->proyectoRepository->update($nuevo, $id);

        Flash::success('Proyecto actualizado correctamente.');

        return redirect(route('proyectos.index'));
    }

    public function asignar(request $request)
    {
       
        $proyecto = $this->proyectoRepository->findWithoutFail($request->id);

        if (empty($proyecto)) {
            Flash::error('Proyecto No se encuentra en encuentra registrado');

            return redirect(route('proyectos.revision_proyectos'));
        }
        
        

        $proyecto = $this->proyectoRepository->update($request->all(), $request->id);

        Flash::success('Proyecto actualizado correctamente.');

        return redirect(route('proyectos.revision_proyectos'));
    }
}
