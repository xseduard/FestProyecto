<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateSemillerosRequest;
use App\Http\Requests\UpdateSemillerosRequest;
use App\Repositories\SemillerosRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SemillerosController extends AppBaseController
{
    /** @var  SemillerosRepository */
    private $semillerosRepository;

    function __construct(SemillerosRepository $semillerosRepo)
    {
        $this->semillerosRepository = $semillerosRepo;
    }

    /**
     * Display a listing of the Semilleros.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->semillerosRepository->pushCriteria(new RequestCriteria($request));
        $semilleros = $this->semillerosRepository->paginate(10);

        return view('semilleros.index')
            ->with('semilleros', $semilleros);
    }

    /**
     * Show the form for creating a new Semilleros.
     *
     * @return Response
     */
    public function create()
    {
        return view('semilleros.create');
    }

    /**
     * Store a newly created Semilleros in storage.
     *
     * @param CreateSemillerosRequest $request
     *
     * @return Response
     */
    public function store(CreateSemillerosRequest $request)
    {
        $input = $request->all();

        $semilleros = $this->semillerosRepository->create($input);

        Flash::success('Semilleros registrado correctamente.');

        return redirect(route('semilleros.index'));
    }

    /**
     * Display the specified Semilleros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $semilleros = $this->semillerosRepository->findWithoutFail($id);

        if (empty($semilleros)) {
            Flash::error('Semilleros No se encuentra en encuentra registrado');

            return redirect(route('semilleros.index'));
        }

        return view('semilleros.show')->with('semilleros', $semilleros);
    }

    /**
     * Show the form for editing the specified Semilleros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $semilleros = $this->semillerosRepository->findWithoutFail($id);

        if (empty($semilleros)) {
            Flash::error('Semilleros No se encuentra en encuentra registrado');

            return redirect(route('semilleros.index'));
        }

        return view('semilleros.edit')->with('semilleros', $semilleros);
    }

    /**
     * Update the specified Semilleros in storage.
     *
     * @param  int              $id
     * @param UpdateSemillerosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSemillerosRequest $request)
    {
        $semilleros = $this->semillerosRepository->findWithoutFail($id);

        if (empty($semilleros)) {
            Flash::error('Semilleros No se encuentra en encuentra registrado');

            return redirect(route('semilleros.index'));
        }

        $semilleros = $this->semillerosRepository->update($request->all(), $id);

        Flash::success('Semilleros actualizado correctamente.');

        return redirect(route('semilleros.index'));
    }

    /**
     * Remove the specified Semilleros from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $semilleros = $this->semillerosRepository->findWithoutFail($id);

        if (empty($semilleros)) {
            Flash::error('Semilleros No se encuentra en encuentra registrado');

            return redirect(route('semilleros.index'));
        }

        $this->semillerosRepository->delete($id);

        Flash::success('Semilleros eliminado correctamente.');

        return redirect(route('semilleros.index'));
    }
}
