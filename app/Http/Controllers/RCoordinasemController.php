<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateRCoordinasemRequest;
use App\Http\Requests\UpdateRCoordinasemRequest;
use App\Repositories\RCoordinasemRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RCoordinasemController extends AppBaseController
{
    /** @var  RCoordinasemRepository */
    private $rCoordinasemRepository;

    function __construct(RCoordinasemRepository $rCoordinasemRepo)
    {
        $this->rCoordinasemRepository = $rCoordinasemRepo;
    }

    /**
     * Display a listing of the RCoordinasem.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->rCoordinasemRepository->pushCriteria(new RequestCriteria($request));
        $rCoordinasems = $this->rCoordinasemRepository->paginate(10);

        return view('rCoordinasems.index')
            ->with('rCoordinasems', $rCoordinasems);
    }

    /**
     * Show the form for creating a new RCoordinasem.
     *
     * @return Response
     */
    public function create()
    {
        return view('rCoordinasems.create');
    }

    /**
     * Store a newly created RCoordinasem in storage.
     *
     * @param CreateRCoordinasemRequest $request
     *
     * @return Response
     */
    public function store(CreateRCoordinasemRequest $request)
    {
        $input = $request->all();

        $rCoordinasem = $this->rCoordinasemRepository->create($input);

        Flash::success('RCoordinasem registrado correctamente.');

        return redirect(route('rCoordinasems.index'));
    }

    /**
     * Display the specified RCoordinasem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rCoordinasem = $this->rCoordinasemRepository->findWithoutFail($id);

        if (empty($rCoordinasem)) {
            Flash::error('RCoordinasem No se encuentra en encuentra registrado');

            return redirect(route('rCoordinasems.index'));
        }

        return view('rCoordinasems.show')->with('rCoordinasem', $rCoordinasem);
    }

    /**
     * Show the form for editing the specified RCoordinasem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rCoordinasem = $this->rCoordinasemRepository->findWithoutFail($id);

        if (empty($rCoordinasem)) {
            Flash::error('RCoordinasem No se encuentra en encuentra registrado');

            return redirect(route('rCoordinasems.index'));
        }

        return view('rCoordinasems.edit')->with('rCoordinasem', $rCoordinasem);
    }

    /**
     * Update the specified RCoordinasem in storage.
     *
     * @param  int              $id
     * @param UpdateRCoordinasemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRCoordinasemRequest $request)
    {
        $rCoordinasem = $this->rCoordinasemRepository->findWithoutFail($id);

        if (empty($rCoordinasem)) {
            Flash::error('RCoordinasem No se encuentra en encuentra registrado');

            return redirect(route('rCoordinasems.index'));
        }

        $rCoordinasem = $this->rCoordinasemRepository->update($request->all(), $id);

        Flash::success('RCoordinasem actualizado correctamente.');

        return redirect(route('rCoordinasems.index'));
    }

    /**
     * Remove the specified RCoordinasem from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rCoordinasem = $this->rCoordinasemRepository->findWithoutFail($id);

        if (empty($rCoordinasem)) {
            Flash::error('RCoordinasem No se encuentra en encuentra registrado');

            return redirect(route('rCoordinasems.index'));
        }

        $this->rCoordinasemRepository->delete($id);

        Flash::success('RCoordinasem eliminado correctamente.');

        return redirect(route('rCoordinasems.index'));
    }
}
