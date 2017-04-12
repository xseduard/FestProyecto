<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateRegionalRequest;
use App\Http\Requests\UpdateRegionalRequest;
use App\Repositories\RegionalRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RegionalController extends AppBaseController
{
    /** @var  RegionalRepository */
    private $regionalRepository;

    function __construct(RegionalRepository $regionalRepo)
    {
        $this->middleware('auth');
        $this->regionalRepository = $regionalRepo;
    }

    /**
     * Display a listing of the Regional.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->regionalRepository->pushCriteria(new RequestCriteria($request));
        $regionals = $this->regionalRepository->paginate(10);

        return view('regionals.index')
            ->with('regionals', $regionals);
    }

    /**
     * Show the form for creating a new Regional.
     *
     * @return Response
     */
    public function create()
    {
        return view('regionals.create');
    }

    /**
     * Store a newly created Regional in storage.
     *
     * @param CreateRegionalRequest $request
     *
     * @return Response
     */
    public function store(CreateRegionalRequest $request)
    {
        $input = $request->all();

        $regional = $this->regionalRepository->create($input);

        Flash::success('Regional registrado correctamente.');

        return redirect(route('regionals.index'));
    }

    /**
     * Display the specified Regional.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $regional = $this->regionalRepository->findWithoutFail($id);

        if (empty($regional)) {
            Flash::error('Regional No se encuentra en encuentra registrado');

            return redirect(route('regionals.index'));
        }

        return view('regionals.show')->with('regional', $regional);
    }

    /**
     * Show the form for editing the specified Regional.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $regional = $this->regionalRepository->findWithoutFail($id);

        if (empty($regional)) {
            Flash::error('Regional No se encuentra en encuentra registrado');

            return redirect(route('regionals.index'));
        }

        return view('regionals.edit')->with('regional', $regional);
    }

    /**
     * Update the specified Regional in storage.
     *
     * @param  int              $id
     * @param UpdateRegionalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRegionalRequest $request)
    {
        $regional = $this->regionalRepository->findWithoutFail($id);

        if (empty($regional)) {
            Flash::error('Regional No se encuentra en encuentra registrado');

            return redirect(route('regionals.index'));
        }

        $regional = $this->regionalRepository->update($request->all(), $id);

        Flash::success('Regional actualizado correctamente.');

        return redirect(route('regionals.index'));
    }

    /**
     * Remove the specified Regional from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $regional = $this->regionalRepository->findWithoutFail($id);

        if (empty($regional)) {
            Flash::error('Regional No se encuentra en encuentra registrado');

            return redirect(route('regionals.index'));
        }

        $this->regionalRepository->delete($id);

        Flash::success('Regional eliminado correctamente.');

        return redirect(route('regionals.index'));
    }
}
