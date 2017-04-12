<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateEstadoRequest;
use App\Http\Requests\UpdateEstadoRequest;
use App\Repositories\EstadoRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EstadoController extends AppBaseController
{
    /** @var  EstadoRepository */
    private $estadoRepository;

    function __construct(EstadoRepository $estadoRepo)
    {
        $this->middleware('auth');
        $this->estadoRepository = $estadoRepo;
    }

    /**
     * Display a listing of the Estado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estadoRepository->pushCriteria(new RequestCriteria($request));
        $estados = $this->estadoRepository->paginate(15);

        return view('estados.index')
            ->with('estados', $estados);
    }

    /**
     * Show the form for creating a new Estado.
     *
     * @return Response
     */
    public function create()
    {
        return view('estados.create');
    }

    /**
     * Store a newly created Estado in storage.
     *
     * @param CreateEstadoRequest $request
     *
     * @return Response
     */
    public function store(CreateEstadoRequest $request)
    {
        $input = $request->all();

        $estado = $this->estadoRepository->create($input);

        Flash::success('Estado registrado correctamente.');

        return redirect(route('estados.index'));
    }

    /**
     * Display the specified Estado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estado = $this->estadoRepository->findWithoutFail($id);

        if (empty($estado)) {
            Flash::error('Estado No se encuentra en encuentra registrado');

            return redirect(route('estados.index'));
        }

        return view('estados.show')->with('estado', $estado);
    }

    /**
     * Show the form for editing the specified Estado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estado = $this->estadoRepository->findWithoutFail($id);

        if (empty($estado)) {
            Flash::error('Estado No se encuentra en encuentra registrado');

            return redirect(route('estados.index'));
        }

        return view('estados.edit')->with('estado', $estado);
    }

    /**
     * Update the specified Estado in storage.
     *
     * @param  int              $id
     * @param UpdateEstadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstadoRequest $request)
    {
        $estado = $this->estadoRepository->findWithoutFail($id);

        if (empty($estado)) {
            Flash::error('Estado No se encuentra en encuentra registrado');

            return redirect(route('estados.index'));
        }

        $estado = $this->estadoRepository->update($request->all(), $id);

        Flash::success('Estado actualizado correctamente.');

        return redirect(route('estados.index'));
    }

    /**
     * Remove the specified Estado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estado = $this->estadoRepository->findWithoutFail($id);

        if (empty($estado)) {
            Flash::error('Estado No se encuentra en encuentra registrado');

            return redirect(route('estados.index'));
        }

        $this->estadoRepository->delete($id);

        Flash::success('Estado eliminado correctamente.');

        return redirect(route('estados.index'));
    }
}
