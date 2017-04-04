<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateNodoRequest;
use App\Http\Requests\UpdateNodoRequest;
use App\Repositories\NodoRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class NodoController extends AppBaseController
{
    /** @var  NodoRepository */
    private $nodoRepository;

    function __construct(NodoRepository $nodoRepo)
    {
        $this->nodoRepository = $nodoRepo;
    }

    /**
     * Display a listing of the Nodo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->nodoRepository->pushCriteria(new RequestCriteria($request));
        $nodos = $this->nodoRepository->paginate(10);

        return view('nodos.index')
            ->with('nodos', $nodos);
    }

    /**
     * Show the form for creating a new Nodo.
     *
     * @return Response
     */
    public function create()
    {
        return view('nodos.create');
    }

    /**
     * Store a newly created Nodo in storage.
     *
     * @param CreateNodoRequest $request
     *
     * @return Response
     */
    public function store(CreateNodoRequest $request)
    {
        $input = $request->all();

        $nodo = $this->nodoRepository->create($input);

        Flash::success('Nodo registrado correctamente.');

        return redirect(route('nodos.index'));
    }

    /**
     * Display the specified Nodo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nodo = $this->nodoRepository->findWithoutFail($id);

        if (empty($nodo)) {
            Flash::error('Nodo No se encuentra en encuentra registrado');

            return redirect(route('nodos.index'));
        }

        return view('nodos.show')->with('nodo', $nodo);
    }

    /**
     * Show the form for editing the specified Nodo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nodo = $this->nodoRepository->findWithoutFail($id);

        if (empty($nodo)) {
            Flash::error('Nodo No se encuentra en encuentra registrado');

            return redirect(route('nodos.index'));
        }

        return view('nodos.edit')->with('nodo', $nodo);
    }

    /**
     * Update the specified Nodo in storage.
     *
     * @param  int              $id
     * @param UpdateNodoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNodoRequest $request)
    {
        $nodo = $this->nodoRepository->findWithoutFail($id);

        if (empty($nodo)) {
            Flash::error('Nodo No se encuentra en encuentra registrado');

            return redirect(route('nodos.index'));
        }

        $nodo = $this->nodoRepository->update($request->all(), $id);

        Flash::success('Nodo actualizado correctamente.');

        return redirect(route('nodos.index'));
    }

    /**
     * Remove the specified Nodo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nodo = $this->nodoRepository->findWithoutFail($id);

        if (empty($nodo)) {
            Flash::error('Nodo No se encuentra en encuentra registrado');

            return redirect(route('nodos.index'));
        }

        $this->nodoRepository->delete($id);

        Flash::success('Nodo eliminado correctamente.');

        return redirect(route('nodos.index'));
    }
}
