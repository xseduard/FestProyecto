<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateUnopruebaRequest;
use App\Http\Requests\UpdateUnopruebaRequest;
use App\Repositories\UnopruebaRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UnopruebaController extends AppBaseController
{
    /** @var  UnopruebaRepository */
    private $unopruebaRepository;

    function __construct(UnopruebaRepository $unopruebaRepo)
    {
        $this->unopruebaRepository = $unopruebaRepo;
    }

    /**
     * Display a listing of the Unoprueba.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->unopruebaRepository->pushCriteria(new RequestCriteria($request));
        $unopruebas = $this->unopruebaRepository->paginate(10);

        return view('unopruebas.index')
            ->with('unopruebas', $unopruebas);
    }

    /**
     * Show the form for creating a new Unoprueba.
     *
     * @return Response
     */
    public function create()
    {
        return view('unopruebas.create');
    }

    /**
     * Store a newly created Unoprueba in storage.
     *
     * @param CreateUnopruebaRequest $request
     *
     * @return Response
     */
    public function store(CreateUnopruebaRequest $request)
    {
        $input = $request->all();

        $unoprueba = $this->unopruebaRepository->create($input);

        Flash::success('Unoprueba Registrado correctamente.');

        return redirect(route('unopruebas.index'));
    }

    /**
     * Display the specified Unoprueba.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $unoprueba = $this->unopruebaRepository->findWithoutFail($id);

        if (empty($unoprueba)) {
            Flash::error('Unoprueba No se encuentra en encuentra registrado');

            return redirect(route('unopruebas.index'));
        }

        return view('unopruebas.show')->with('unoprueba', $unoprueba);
    }

    /**
     * Show the form for editing the specified Unoprueba.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $unoprueba = $this->unopruebaRepository->findWithoutFail($id);

        if (empty($unoprueba)) {
            Flash::error('Unoprueba No se encuentra en encuentra registrado');

            return redirect(route('unopruebas.index'));
        }

        return view('unopruebas.edit')->with('unoprueba', $unoprueba);
    }

    /**
     * Update the specified Unoprueba in storage.
     *
     * @param  int              $id
     * @param UpdateUnopruebaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUnopruebaRequest $request)
    {
        $unoprueba = $this->unopruebaRepository->findWithoutFail($id);

        if (empty($unoprueba)) {
            Flash::error('Unoprueba No se encuentra en encuentra registrado');

            return redirect(route('unopruebas.index'));
        }

        $unoprueba = $this->unopruebaRepository->update($request->all(), $id);

        Flash::success('Unoprueba Actualizado correctamente.');

        return redirect(route('unopruebas.index'));
    }

    /**
     * Remove the specified Unoprueba from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $unoprueba = $this->unopruebaRepository->findWithoutFail($id);

        if (empty($unoprueba)) {
            Flash::error('Unoprueba No se encuentra en encuentra registrado');

            return redirect(route('unopruebas.index'));
        }

        $this->unopruebaRepository->delete($id);

        Flash::success('Unoprueba Eliminado correctamente.');

        return redirect(route('unopruebas.index'));
    }
}
