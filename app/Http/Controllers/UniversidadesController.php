<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateUniversidadesRequest;
use App\Http\Requests\UpdateUniversidadesRequest;
use App\Repositories\UniversidadesRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UniversidadesController extends AppBaseController
{
    /** @var  UniversidadesRepository */
    private $universidadesRepository;

    function __construct(UniversidadesRepository $universidadesRepo)
    {
        $this->universidadesRepository = $universidadesRepo;
    }

    /**
     * Display a listing of the Universidades.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->universidadesRepository->pushCriteria(new RequestCriteria($request));
        $universidades = $this->universidadesRepository->paginate(10);

        return view('universidades.index')
            ->with('universidades', $universidades);
    }

    /**
     * Show the form for creating a new Universidades.
     *
     * @return Response
     */
    public function create()
    {
        return view('universidades.create');
    }

    /**
     * Store a newly created Universidades in storage.
     *
     * @param CreateUniversidadesRequest $request
     *
     * @return Response
     */
    public function store(CreateUniversidadesRequest $request)
    {
        $input = $request->all();

        $universidades = $this->universidadesRepository->create($input);

        Flash::success('Universidades registrado correctamente.');

        return redirect(route('universidades.index'));
    }

    /**
     * Display the specified Universidades.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $universidades = $this->universidadesRepository->findWithoutFail($id);

        if (empty($universidades)) {
            Flash::error('Universidades No se encuentra en encuentra registrado');

            return redirect(route('universidades.index'));
        }

        return view('universidades.show')->with('universidades', $universidades);
    }

    /**
     * Show the form for editing the specified Universidades.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $universidades = $this->universidadesRepository->findWithoutFail($id);

        if (empty($universidades)) {
            Flash::error('Universidades No se encuentra en encuentra registrado');

            return redirect(route('universidades.index'));
        }

        return view('universidades.edit')->with('universidades', $universidades);
    }

    /**
     * Update the specified Universidades in storage.
     *
     * @param  int              $id
     * @param UpdateUniversidadesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUniversidadesRequest $request)
    {
        $universidades = $this->universidadesRepository->findWithoutFail($id);

        if (empty($universidades)) {
            Flash::error('Universidades No se encuentra en encuentra registrado');

            return redirect(route('universidades.index'));
        }

        $universidades = $this->universidadesRepository->update($request->all(), $id);

        Flash::success('Universidades actualizado correctamente.');

        return redirect(route('universidades.index'));
    }

    /**
     * Remove the specified Universidades from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $universidades = $this->universidadesRepository->findWithoutFail($id);

        if (empty($universidades)) {
            Flash::error('Universidades No se encuentra en encuentra registrado');

            return redirect(route('universidades.index'));
        }

        $this->universidadesRepository->delete($id);

        Flash::success('Universidades eliminado correctamente.');

        return redirect(route('universidades.index'));
    }
}
