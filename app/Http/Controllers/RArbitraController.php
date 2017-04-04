<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateRArbitraRequest;
use App\Http\Requests\UpdateRArbitraRequest;
use App\Repositories\RArbitraRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RArbitraController extends AppBaseController
{
    /** @var  RArbitraRepository */
    private $rArbitraRepository;

    function __construct(RArbitraRepository $rArbitraRepo)
    {
        $this->rArbitraRepository = $rArbitraRepo;
    }

    /**
     * Display a listing of the RArbitra.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->rArbitraRepository->pushCriteria(new RequestCriteria($request));
        $rArbitras = $this->rArbitraRepository->paginate(10);

        return view('rArbitras.index')
            ->with('rArbitras', $rArbitras);
    }

    /**
     * Show the form for creating a new RArbitra.
     *
     * @return Response
     */
    public function create()
    {
        return view('rArbitras.create');
    }

    /**
     * Store a newly created RArbitra in storage.
     *
     * @param CreateRArbitraRequest $request
     *
     * @return Response
     */
    public function store(CreateRArbitraRequest $request)
    {
        $input = $request->all();

        $rArbitra = $this->rArbitraRepository->create($input);

        Flash::success('RArbitra registrado correctamente.');

        return redirect(route('rArbitras.index'));
    }

    /**
     * Display the specified RArbitra.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rArbitra = $this->rArbitraRepository->findWithoutFail($id);

        if (empty($rArbitra)) {
            Flash::error('RArbitra No se encuentra en encuentra registrado');

            return redirect(route('rArbitras.index'));
        }

        return view('rArbitras.show')->with('rArbitra', $rArbitra);
    }

    /**
     * Show the form for editing the specified RArbitra.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rArbitra = $this->rArbitraRepository->findWithoutFail($id);

        if (empty($rArbitra)) {
            Flash::error('RArbitra No se encuentra en encuentra registrado');

            return redirect(route('rArbitras.index'));
        }

        return view('rArbitras.edit')->with('rArbitra', $rArbitra);
    }

    /**
     * Update the specified RArbitra in storage.
     *
     * @param  int              $id
     * @param UpdateRArbitraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRArbitraRequest $request)
    {
        $rArbitra = $this->rArbitraRepository->findWithoutFail($id);

        if (empty($rArbitra)) {
            Flash::error('RArbitra No se encuentra en encuentra registrado');

            return redirect(route('rArbitras.index'));
        }

        $rArbitra = $this->rArbitraRepository->update($request->all(), $id);

        Flash::success('RArbitra actualizado correctamente.');

        return redirect(route('rArbitras.index'));
    }

    /**
     * Remove the specified RArbitra from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rArbitra = $this->rArbitraRepository->findWithoutFail($id);

        if (empty($rArbitra)) {
            Flash::error('RArbitra No se encuentra en encuentra registrado');

            return redirect(route('rArbitras.index'));
        }

        $this->rArbitraRepository->delete($id);

        Flash::success('RArbitra eliminado correctamente.');

        return redirect(route('rArbitras.index'));
    }
}
