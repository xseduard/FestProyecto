<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateRIntegraRequest;
use App\Http\Requests\UpdateRIntegraRequest;
use App\Repositories\RIntegraRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RIntegraController extends AppBaseController
{
    /** @var  RIntegraRepository */
    private $rIntegraRepository;

    function __construct(RIntegraRepository $rIntegraRepo)
    {
        $this->rIntegraRepository = $rIntegraRepo;
    }

    /**
     * Display a listing of the RIntegra.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->rIntegraRepository->pushCriteria(new RequestCriteria($request));
        $rIntegras = $this->rIntegraRepository->paginate(10);

        return view('rIntegras.index')
            ->with('rIntegras', $rIntegras);
    }

    /**
     * Show the form for creating a new RIntegra.
     *
     * @return Response
     */
    public function create()
    {
        return view('rIntegras.create');
    }

    /**
     * Store a newly created RIntegra in storage.
     *
     * @param CreateRIntegraRequest $request
     *
     * @return Response
     */
    public function store(CreateRIntegraRequest $request)
    {
        $input = $request->all();

        $rIntegra = $this->rIntegraRepository->create($input);

        Flash::success('RIntegra registrado correctamente.');

        return redirect(route('rIntegras.index'));
    }

    /**
     * Display the specified RIntegra.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rIntegra = $this->rIntegraRepository->findWithoutFail($id);

        if (empty($rIntegra)) {
            Flash::error('RIntegra No se encuentra en encuentra registrado');

            return redirect(route('rIntegras.index'));
        }

        return view('rIntegras.show')->with('rIntegra', $rIntegra);
    }

    /**
     * Show the form for editing the specified RIntegra.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rIntegra = $this->rIntegraRepository->findWithoutFail($id);

        if (empty($rIntegra)) {
            Flash::error('RIntegra No se encuentra en encuentra registrado');

            return redirect(route('rIntegras.index'));
        }

        return view('rIntegras.edit')->with('rIntegra', $rIntegra);
    }

    /**
     * Update the specified RIntegra in storage.
     *
     * @param  int              $id
     * @param UpdateRIntegraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRIntegraRequest $request)
    {
        $rIntegra = $this->rIntegraRepository->findWithoutFail($id);

        if (empty($rIntegra)) {
            Flash::error('RIntegra No se encuentra en encuentra registrado');

            return redirect(route('rIntegras.index'));
        }

        $rIntegra = $this->rIntegraRepository->update($request->all(), $id);

        Flash::success('RIntegra actualizado correctamente.');

        return redirect(route('rIntegras.index'));
    }

    /**
     * Remove the specified RIntegra from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rIntegra = $this->rIntegraRepository->findWithoutFail($id);

        if (empty($rIntegra)) {
            Flash::error('RIntegra No se encuentra en encuentra registrado');

            return redirect(route('rIntegras.index'));
        }

        $this->rIntegraRepository->delete($id);

        Flash::success('RIntegra eliminado correctamente.');

        return redirect(route('rIntegras.index'));
    }
}
