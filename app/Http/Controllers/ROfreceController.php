<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateROfreceRequest;
use App\Http\Requests\UpdateROfreceRequest;
use App\Repositories\ROfreceRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ROfreceController extends AppBaseController
{
    /** @var  ROfreceRepository */
    private $rOfreceRepository;

    function __construct(ROfreceRepository $rOfreceRepo)
    {
        $this->rOfreceRepository = $rOfreceRepo;
    }

    /**
     * Display a listing of the ROfrece.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->rOfreceRepository->pushCriteria(new RequestCriteria($request));
        $rOfreces = $this->rOfreceRepository->paginate(10);

        return view('rOfreces.index')
            ->with('rOfreces', $rOfreces);
    }

    /**
     * Show the form for creating a new ROfrece.
     *
     * @return Response
     */
    public function create()
    {
        return view('rOfreces.create');
    }

    /**
     * Store a newly created ROfrece in storage.
     *
     * @param CreateROfreceRequest $request
     *
     * @return Response
     */
    public function store(CreateROfreceRequest $request)
    {
        $input = $request->all();

        $rOfrece = $this->rOfreceRepository->create($input);

        Flash::success('ROfrece registrado correctamente.');

        return redirect(route('rOfreces.index'));
    }

    /**
     * Display the specified ROfrece.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rOfrece = $this->rOfreceRepository->findWithoutFail($id);

        if (empty($rOfrece)) {
            Flash::error('ROfrece No se encuentra en encuentra registrado');

            return redirect(route('rOfreces.index'));
        }

        return view('rOfreces.show')->with('rOfrece', $rOfrece);
    }

    /**
     * Show the form for editing the specified ROfrece.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rOfrece = $this->rOfreceRepository->findWithoutFail($id);

        if (empty($rOfrece)) {
            Flash::error('ROfrece No se encuentra en encuentra registrado');

            return redirect(route('rOfreces.index'));
        }

        return view('rOfreces.edit')->with('rOfrece', $rOfrece);
    }

    /**
     * Update the specified ROfrece in storage.
     *
     * @param  int              $id
     * @param UpdateROfreceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateROfreceRequest $request)
    {
        $rOfrece = $this->rOfreceRepository->findWithoutFail($id);

        if (empty($rOfrece)) {
            Flash::error('ROfrece No se encuentra en encuentra registrado');

            return redirect(route('rOfreces.index'));
        }

        $rOfrece = $this->rOfreceRepository->update($request->all(), $id);

        Flash::success('ROfrece actualizado correctamente.');

        return redirect(route('rOfreces.index'));
    }

    /**
     * Remove the specified ROfrece from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rOfrece = $this->rOfreceRepository->findWithoutFail($id);

        if (empty($rOfrece)) {
            Flash::error('ROfrece No se encuentra en encuentra registrado');

            return redirect(route('rOfreces.index'));
        }

        $this->rOfreceRepository->delete($id);

        Flash::success('ROfrece eliminado correctamente.');

        return redirect(route('rOfreces.index'));
    }
}
