<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateRSuscribeRequest;
use App\Http\Requests\UpdateRSuscribeRequest;
use App\Repositories\RSuscribeRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RSuscribeController extends AppBaseController
{
    /** @var  RSuscribeRepository */
    private $rSuscribeRepository;

    function __construct(RSuscribeRepository $rSuscribeRepo)
    {
        $this->rSuscribeRepository = $rSuscribeRepo;
    }

    /**
     * Display a listing of the RSuscribe.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->rSuscribeRepository->pushCriteria(new RequestCriteria($request));
        $rSuscribes = $this->rSuscribeRepository->paginate(10);

        return view('rSuscribes.index')
            ->with('rSuscribes', $rSuscribes);
    }

    /**
     * Show the form for creating a new RSuscribe.
     *
     * @return Response
     */
    public function create()
    {
        return view('rSuscribes.create');
    }

    /**
     * Store a newly created RSuscribe in storage.
     *
     * @param CreateRSuscribeRequest $request
     *
     * @return Response
     */
    public function store(CreateRSuscribeRequest $request)
    {
        $input = $request->all();

        $rSuscribe = $this->rSuscribeRepository->create($input);

        Flash::success('RSuscribe registrado correctamente.');

        return redirect(route('rSuscribes.index'));
    }

    /**
     * Display the specified RSuscribe.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rSuscribe = $this->rSuscribeRepository->findWithoutFail($id);

        if (empty($rSuscribe)) {
            Flash::error('RSuscribe No se encuentra en encuentra registrado');

            return redirect(route('rSuscribes.index'));
        }

        return view('rSuscribes.show')->with('rSuscribe', $rSuscribe);
    }

    /**
     * Show the form for editing the specified RSuscribe.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rSuscribe = $this->rSuscribeRepository->findWithoutFail($id);

        if (empty($rSuscribe)) {
            Flash::error('RSuscribe No se encuentra en encuentra registrado');

            return redirect(route('rSuscribes.index'));
        }

        return view('rSuscribes.edit')->with('rSuscribe', $rSuscribe);
    }

    /**
     * Update the specified RSuscribe in storage.
     *
     * @param  int              $id
     * @param UpdateRSuscribeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRSuscribeRequest $request)
    {
        $rSuscribe = $this->rSuscribeRepository->findWithoutFail($id);

        if (empty($rSuscribe)) {
            Flash::error('RSuscribe No se encuentra en encuentra registrado');

            return redirect(route('rSuscribes.index'));
        }

        $rSuscribe = $this->rSuscribeRepository->update($request->all(), $id);

        Flash::success('RSuscribe actualizado correctamente.');

        return redirect(route('rSuscribes.index'));
    }

    /**
     * Remove the specified RSuscribe from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rSuscribe = $this->rSuscribeRepository->findWithoutFail($id);

        if (empty($rSuscribe)) {
            Flash::error('RSuscribe No se encuentra en encuentra registrado');

            return redirect(route('rSuscribes.index'));
        }

        $this->rSuscribeRepository->delete($id);

        Flash::success('RSuscribe eliminado correctamente.');

        return redirect(route('rSuscribes.index'));
    }
}
