<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateEventoExpoRequest;
use App\Http\Requests\UpdateEventoExpoRequest;
use App\Repositories\EventoExpoRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\GrupoJurado;

class EventoExpoController extends AppBaseController
{
    /** @var  EventoExpoRepository */
    private $eventoExpoRepository;

    function __construct(EventoExpoRepository $eventoExpoRepo)
    {
        $this->eventoExpoRepository = $eventoExpoRepo;
    }

    /**
     * Display a listing of the EventoExpo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->eventoExpoRepository->pushCriteria(new RequestCriteria($request));
        $eventoExpos = $this->eventoExpoRepository->paginate(10);

        return view('eventoExpos.index')
            ->with('eventoExpos', $eventoExpos);
    }

    /**
     * Show the form for creating a new EventoExpo.
     *
     * @return Response
     */
    public function create()
    {
         $selectores = [
            'grupojurado'=> GrupoJurado::selGrupoJurado()        
        ];

        return view('eventoExpos.create')->with(['selectores' => $selectores]);
        
    }

    /**
     * Store a newly created EventoExpo in storage.
     *
     * @param CreateEventoExpoRequest $request
     *
     * @return Response
     */
    public function store(CreateEventoExpoRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::id();

        $eventoExpo = $this->eventoExpoRepository->create($input);

        Flash::success('EventoExpo registrado correctamente.');

        return redirect(route('eventoExpos.index'));
    }

    /**
     * Display the specified EventoExpo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $eventoExpo = $this->eventoExpoRepository->findWithoutFail($id);

        if (empty($eventoExpo)) {
            Flash::error('EventoExpo No se encuentra en encuentra registrado');

            return redirect(route('eventoExpos.index'));
        }

        return view('eventoExpos.show')->with('eventoExpo', $eventoExpo);
    }

    /**
     * Show the form for editing the specified EventoExpo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $eventoExpo = $this->eventoExpoRepository->findWithoutFail($id);

        if (empty($eventoExpo)) {
            Flash::error('EventoExpo No se encuentra en encuentra registrado');

            return redirect(route('eventoExpos.index'));
        }
         $selectores = [
            'grupojurado'=> GrupoJurado::selGrupoJurado()        
        ];

        return view('eventoExpos.edit')->with(['eventoExpo' => $eventoExpo,'selectores' => $selectores]);
    }

    /**
     * Update the specified EventoExpo in storage.
     *
     * @param  int              $id
     * @param UpdateEventoExpoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEventoExpoRequest $request)
    {
        $eventoExpo = $this->eventoExpoRepository->findWithoutFail($id);

        if (empty($eventoExpo)) {
            Flash::error('EventoExpo No se encuentra en encuentra registrado');

            return redirect(route('eventoExpos.index'));
        }

        $eventoExpo = $this->eventoExpoRepository->update($request->all(), $id);

        Flash::success('EventoExpo actualizado correctamente.');

        return redirect(route('eventoExpos.index'));
    }

    /**
     * Remove the specified EventoExpo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $eventoExpo = $this->eventoExpoRepository->findWithoutFail($id);

        if (empty($eventoExpo)) {
            Flash::error('EventoExpo No se encuentra en encuentra registrado');

            return redirect(route('eventoExpos.index'));
        }

        $this->eventoExpoRepository->delete($id);

        Flash::success('EventoExpo eliminado correctamente.');

        return redirect(route('eventoExpos.index'));
    }
}
