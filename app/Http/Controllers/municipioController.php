<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatemunicipioRequest;
use App\Http\Requests\UpdatemunicipioRequest;
use App\Repositories\municipioRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class municipioController extends AppBaseController
{
    /** @var  municipioRepository */
    private $municipioRepository;

    function __construct(municipioRepository $municipioRepo)
    {
        $this->municipioRepository = $municipioRepo;
    }

    /**
     * Display a listing of the municipio.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->municipioRepository->pushCriteria(new RequestCriteria($request));
        $municipios = $this->municipioRepository->paginate(10);
    //dd($municipios->departamento->nombre);
        return view('municipios.index')
            ->with('municipios', $municipios);
    }

    /**
     * Show the form for creating a new municipio.
     *
     * @return Response
     */
    public function create()
    {
        return view('municipios.create');
    }

    /**
     * Store a newly created municipio in storage.
     *
     * @param CreatemunicipioRequest $request
     *
     * @return Response
     */
    public function store(CreatemunicipioRequest $request)
    {
        $input = $request->all();

        $municipio = $this->municipioRepository->create($input);

        Flash::success('municipio registrado correctamente.');

        return redirect(route('municipios.index'));
    }

    /**
     * Display the specified municipio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $municipio = $this->municipioRepository->findWithoutFail($id);

        if (empty($municipio)) {
            Flash::error('municipio No se encuentra en encuentra registrado');

            return redirect(route('municipios.index'));
        }

        return view('municipios.show')->with('municipio', $municipio);
    }

    /**
     * Show the form for editing the specified municipio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $municipio = $this->municipioRepository->findWithoutFail($id);

        if (empty($municipio)) {
            Flash::error('municipio No se encuentra en encuentra registrado');

            return redirect(route('municipios.index'));
        }

        return view('municipios.edit')->with('municipio', $municipio);
    }

    /**
     * Update the specified municipio in storage.
     *
     * @param  int              $id
     * @param UpdatemunicipioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemunicipioRequest $request)
    {
        $municipio = $this->municipioRepository->findWithoutFail($id);

        if (empty($municipio)) {
            Flash::error('municipio No se encuentra en encuentra registrado');

            return redirect(route('municipios.index'));
        }

        $municipio = $this->municipioRepository->update($request->all(), $id);

        Flash::success('municipio actualizado correctamente.');

        return redirect(route('municipios.index'));
    }

    /**
     * Remove the specified municipio from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $municipio = $this->municipioRepository->findWithoutFail($id);

        if (empty($municipio)) {
            Flash::error('municipio No se encuentra en encuentra registrado');

            return redirect(route('municipios.index'));
        }

        $this->municipioRepository->delete($id);

        Flash::success('municipio eliminado correctamente.');

        return redirect(route('municipios.index'));
    }
}
