<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateRRealizaRequest;
use App\Http\Requests\UpdateRRealizaRequest;
use App\Repositories\RRealizaRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RRealizaController extends AppBaseController
{
    /** @var  RRealizaRepository */
    private $rRealizaRepository;

    function __construct(RRealizaRepository $rRealizaRepo)
    {
        $this->rRealizaRepository = $rRealizaRepo;
    }

    /**
     * Display a listing of the RRealiza.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->rRealizaRepository->pushCriteria(new RequestCriteria($request));
        $rRealizas = $this->rRealizaRepository->paginate(10);

        return view('rRealizas.index')
            ->with('rRealizas', $rRealizas);
    }

    /**
     * Show the form for creating a new RRealiza.
     *
     * @return Response
     */
    public function create()
    {
        return view('rRealizas.create');
    }

    /**
     * Store a newly created RRealiza in storage.
     *
     * @param CreateRRealizaRequest $request
     *
     * @return Response
     */
    public function store(CreateRRealizaRequest $request)
    {
        $input = $request->all();

        $rRealiza = $this->rRealizaRepository->create($input);

        Flash::success('RRealiza registrado correctamente.');

        return redirect(route('rRealizas.index'));
    }

    /**
     * Display the specified RRealiza.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rRealiza = $this->rRealizaRepository->findWithoutFail($id);

        if (empty($rRealiza)) {
            Flash::error('RRealiza No se encuentra en encuentra registrado');

            return redirect(route('rRealizas.index'));
        }

        return view('rRealizas.show')->with('rRealiza', $rRealiza);
    }

    /**
     * Show the form for editing the specified RRealiza.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rRealiza = $this->rRealizaRepository->findWithoutFail($id);

        if (empty($rRealiza)) {
            Flash::error('RRealiza No se encuentra en encuentra registrado');

            return redirect(route('rRealizas.index'));
        }

        return view('rRealizas.edit')->with('rRealiza', $rRealiza);
    }

    /**
     * Update the specified RRealiza in storage.
     *
     * @param  int              $id
     * @param UpdateRRealizaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRRealizaRequest $request)
    {
        $rRealiza = $this->rRealizaRepository->findWithoutFail($id);

        if (empty($rRealiza)) {
            Flash::error('RRealiza No se encuentra en encuentra registrado');

            return redirect(route('rRealizas.index'));
        }

        $rRealiza = $this->rRealizaRepository->update($request->all(), $id);

        Flash::success('RRealiza actualizado correctamente.');

        return redirect(route('rRealizas.index'));
    }

    /**
     * Remove the specified RRealiza from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rRealiza = $this->rRealizaRepository->findWithoutFail($id);

        if (empty($rRealiza)) {
            Flash::error('RRealiza No se encuentra en encuentra registrado');

            return redirect(route('rRealizas.index'));
        }

        $this->rRealizaRepository->delete($id);

        Flash::success('RRealiza eliminado correctamente.');

        return redirect(route('rRealizas.index'));
    }
}
