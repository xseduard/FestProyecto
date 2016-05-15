<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateEventoCRequest;
use App\Http\Requests\UpdateEventoCRequest;
use App\Repositories\EventoCRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EventoCController extends AppBaseController
{
    /** @var  EventoCRepository */
    private $eventoCRepository;

    function __construct(EventoCRepository $eventoCRepo)
    {
        $this->eventoCRepository = $eventoCRepo;
    }

    /**
     * Display a listing of the EventoC.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->eventoCRepository->pushCriteria(new RequestCriteria($request));
        $eventoCs = $this->eventoCRepository->paginate(10);

        return view('eventoCs.index')
            ->with('eventoCs', $eventoCs);
    }

    /**
     * Show the form for creating a new EventoC.
     *
     * @return Response
     */
    public function create()
    {
        return view('eventoCs.create');
    }

    /**
     * Store a newly created EventoC in storage.
     *
     * @param CreateEventoCRequest $request
     *
     * @return Response
     */
    public function store(CreateEventoCRequest $request)
    {
        $input = $request->all();

        $eventoC = $this->eventoCRepository->create($input);

        Flash::success('EventoC registrado correctamente.');

        return redirect(route('eventoCs.index'));
    }

    /**
     * Display the specified EventoC.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $eventoC = $this->eventoCRepository->findWithoutFail($id);

        if (empty($eventoC)) {
            Flash::error('EventoC No se encuentra en encuentra registrado');

            return redirect(route('eventoCs.index'));
        }

        return view('eventoCs.show')->with('eventoC', $eventoC);
    }

    /**
     * Show the form for editing the specified EventoC.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $eventoC = $this->eventoCRepository->findWithoutFail($id);

        if (empty($eventoC)) {
            Flash::error('EventoC No se encuentra en encuentra registrado');

            return redirect(route('eventoCs.index'));
        }

        return view('eventoCs.edit')->with('eventoC', $eventoC);
    }

    /**
     * Update the specified EventoC in storage.
     *
     * @param  int              $id
     * @param UpdateEventoCRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEventoCRequest $request)
    {
        $eventoC = $this->eventoCRepository->findWithoutFail($id);

        if (empty($eventoC)) {
            Flash::error('EventoC No se encuentra en encuentra registrado');

            return redirect(route('eventoCs.index'));
        }

        $eventoC = $this->eventoCRepository->update($request->all(), $id);

        Flash::success('EventoC actualizado correctamente.');

        return redirect(route('eventoCs.index'));
    }

    /**
     * Remove the specified EventoC from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $eventoC = $this->eventoCRepository->findWithoutFail($id);

        if (empty($eventoC)) {
            Flash::error('EventoC No se encuentra en encuentra registrado');

            return redirect(route('eventoCs.index'));
        }

        $this->eventoCRepository->delete($id);

        Flash::success('EventoC eliminado correctamente.');

        return redirect(route('eventoCs.index'));
    }
}
