<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProyectoRequest;
use App\Http\Requests\UpdateProyectoRequest;
use App\Repositories\ProyectoRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Regional;
use App\Models\Semillero;
use App\Models\area;
use App\Models\programa;
use App\User;
use App\Models\Estado;
use App\Models\Linea_Investigacion;
use App\Models\GrupoJurado;
use App\Models\EventoExpo;


class ProyectoController extends AppBaseController
{
    /** @var  ProyectoRepository */
    private $proyectoRepository;

    function __construct(ProyectoRepository $proyectoRepo)
    {
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
        $this->proyectoRepository->pushCriteria(new RequestCriteria($request));
        $proyectos = $this->proyectoRepository->paginate(10);

        return view('proyectos.index')
            ->with('proyectos', $proyectos);
    }

    /**
     * Show the form for creating a new Proyecto.
     *
     * @return Response
     */
    public function create()
    {
        $selectores = [
            'regionals' => Regional::selRegional(),
            'estudiantes'=> Semillero::selSe(),
            'docentes'=> area::selArea('docente'),
            'grupo_investigacions'=> programa::selGrupo_Investigacion(),
            'regionals' => User::selRegional(),
            'estudiantes'=> Estado::selEstudiante(),
            'docentes'=> Linea_Investigacion::selUsuario('docente'),
            'grupo_investigacions'=> GrupoJurado::sel()        
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

        return view('proyectos.edit')->with('proyecto', $proyecto);
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
}
