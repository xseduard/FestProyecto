<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateSemilleroRequest;
use App\Http\Requests\UpdateSemilleroRequest;
use App\Repositories\SemilleroRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SemilleroController extends AppBaseController
{
    /** @var  SemilleroRepository */
    private $semilleroRepository;

    function __construct(SemilleroRepository $semilleroRepo)
    {
        $this->semilleroRepository = $semilleroRepo;
    }

    /**
     * Display a listing of the Semillero.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->semilleroRepository->pushCriteria(new RequestCriteria($request));
        $semilleros = $this->semilleroRepository->paginate(10);

        return view('semilleros.index')
            ->with('semilleros', $semilleros);
    }

    /**
     * Show the form for creating a new Semillero.
     *
     * @return Response
     */
    public function create()
    {
        return view('semilleros.create');
    }

    /**
     * Store a newly created Semillero in storage.
     *
     * @param CreateSemilleroRequest $request
     *
     * @return Response
     */
    public function store(CreateSemilleroRequest $request)
    {
        $input = $request->all();

        $semillero = $this->semilleroRepository->create($input);

        Flash::success('Semillero registrado correctamente.');

        return redirect(route('semilleros.index'));
    }

    /**
     * Display the specified Semillero.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $semillero = $this->semilleroRepository->findWithoutFail($id);

        if (empty($semillero)) {
            Flash::error('Semillero No se encuentra en encuentra registrado');

            return redirect(route('semilleros.index'));
        }

        return view('semilleros.show')->with('semillero', $semillero);
    }

    /**
     * Show the form for editing the specified Semillero.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $semillero = $this->semilleroRepository->findWithoutFail($id);

        if (empty($semillero)) {
            Flash::error('Semillero No se encuentra en encuentra registrado');

            return redirect(route('semilleros.index'));
        }

        return view('semilleros.edit')->with('semillero', $semillero);
    }

    /**
     * Update the specified Semillero in storage.
     *
     * @param  int              $id
     * @param UpdateSemilleroRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSemilleroRequest $request)
    {
        $semillero = $this->semilleroRepository->findWithoutFail($id);

        if (empty($semillero)) {
            Flash::error('Semillero No se encuentra en encuentra registrado');

            return redirect(route('semilleros.index'));
        }

        $semillero = $this->semilleroRepository->update($request->all(), $id);

        Flash::success('Semillero actualizado correctamente.');

        return redirect(route('semilleros.index'));
    }

    /**
     * Remove the specified Semillero from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $semillero = $this->semilleroRepository->findWithoutFail($id);

        if (empty($semillero)) {
            Flash::error('Semillero No se encuentra en encuentra registrado');

            return redirect(route('semilleros.index'));
        }

        $this->semilleroRepository->delete($id);

        Flash::success('Semillero eliminado correctamente.');

        return redirect(route('semilleros.index'));
    }
}
