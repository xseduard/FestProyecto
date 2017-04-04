<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateREstudiaRequest;
use App\Http\Requests\UpdateREstudiaRequest;
use App\Repositories\REstudiaRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class REstudiaController extends AppBaseController
{
    /** @var  REstudiaRepository */
    private $rEstudiaRepository;

    function __construct(REstudiaRepository $rEstudiaRepo)
    {
        $this->rEstudiaRepository = $rEstudiaRepo;
    }

    /**
     * Display a listing of the REstudia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->rEstudiaRepository->pushCriteria(new RequestCriteria($request));
        $rEstudias = $this->rEstudiaRepository->paginate(10);

        return view('rEstudias.index')
            ->with('rEstudias', $rEstudias);
    }

    /**
     * Show the form for creating a new REstudia.
     *
     * @return Response
     */
    public function create()
    {
        return view('rEstudias.create');
    }

    /**
     * Store a newly created REstudia in storage.
     *
     * @param CreateREstudiaRequest $request
     *
     * @return Response
     */
    public function store(CreateREstudiaRequest $request)
    {
        $input = $request->all();

        $rEstudia = $this->rEstudiaRepository->create($input);

        Flash::success('REstudia registrado correctamente.');

        return redirect(route('rEstudias.index'));
    }

    /**
     * Display the specified REstudia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rEstudia = $this->rEstudiaRepository->findWithoutFail($id);

        if (empty($rEstudia)) {
            Flash::error('REstudia No se encuentra en encuentra registrado');

            return redirect(route('rEstudias.index'));
        }

        return view('rEstudias.show')->with('rEstudia', $rEstudia);
    }

    /**
     * Show the form for editing the specified REstudia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rEstudia = $this->rEstudiaRepository->findWithoutFail($id);

        if (empty($rEstudia)) {
            Flash::error('REstudia No se encuentra en encuentra registrado');

            return redirect(route('rEstudias.index'));
        }

        return view('rEstudias.edit')->with('rEstudia', $rEstudia);
    }

    /**
     * Update the specified REstudia in storage.
     *
     * @param  int              $id
     * @param UpdateREstudiaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateREstudiaRequest $request)
    {
        $rEstudia = $this->rEstudiaRepository->findWithoutFail($id);

        if (empty($rEstudia)) {
            Flash::error('REstudia No se encuentra en encuentra registrado');

            return redirect(route('rEstudias.index'));
        }

        $rEstudia = $this->rEstudiaRepository->update($request->all(), $id);

        Flash::success('REstudia actualizado correctamente.');

        return redirect(route('rEstudias.index'));
    }

    /**
     * Remove the specified REstudia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rEstudia = $this->rEstudiaRepository->findWithoutFail($id);

        if (empty($rEstudia)) {
            Flash::error('REstudia No se encuentra en encuentra registrado');

            return redirect(route('rEstudias.index'));
        }

        $this->rEstudiaRepository->delete($id);

        Flash::success('REstudia eliminado correctamente.');

        return redirect(route('rEstudias.index'));
    }
}
