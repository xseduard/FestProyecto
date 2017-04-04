<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePaisRequest;
use App\Http\Requests\UpdatePaisRequest;
use App\Repositories\PaisRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PaisController extends AppBaseController
{
    /** @var  PaisRepository */
    private $paisRepository;

    function __construct(PaisRepository $paisRepo)
    {
        $this->paisRepository = $paisRepo;
    }

    /**
     * Display a listing of the Pais.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->paisRepository->pushCriteria(new RequestCriteria($request));
        $pais = $this->paisRepository->paginate(10);

        return view('pais.index')
            ->with('pais', $pais);
    }

    /**
     * Show the form for creating a new Pais.
     *
     * @return Response
     */
    public function create()
    {
        return view('pais.create');
    }

    /**
     * Store a newly created Pais in storage.
     *
     * @param CreatePaisRequest $request
     *
     * @return Response
     */
    public function store(CreatePaisRequest $request)
    {
        $input = $request->all();

        $pais = $this->paisRepository->create($input);

        Flash::success('Pais registrado correctamente.');

        return redirect(route('pais.index'));
    }

    /**
     * Display the specified Pais.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pais = $this->paisRepository->findWithoutFail($id);

        if (empty($pais)) {
            Flash::error('Pais No se encuentra en encuentra registrado');

            return redirect(route('pais.index'));
        }

        return view('pais.show')->with('pais', $pais);
    }

    /**
     * Show the form for editing the specified Pais.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pais = $this->paisRepository->findWithoutFail($id);

        if (empty($pais)) {
            Flash::error('Pais No se encuentra en encuentra registrado');

            return redirect(route('pais.index'));
        }

        return view('pais.edit')->with('pais', $pais);
    }

    /**
     * Update the specified Pais in storage.
     *
     * @param  int              $id
     * @param UpdatePaisRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaisRequest $request)
    {
        $pais = $this->paisRepository->findWithoutFail($id);

        if (empty($pais)) {
            Flash::error('Pais No se encuentra en encuentra registrado');

            return redirect(route('pais.index'));
        }

        $pais = $this->paisRepository->update($request->all(), $id);

        Flash::success('Pais actualizado correctamente.');

        return redirect(route('pais.index'));
    }

    /**
     * Remove the specified Pais from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pais = $this->paisRepository->findWithoutFail($id);

        if (empty($pais)) {
            Flash::error('Pais No se encuentra en encuentra registrado');

            return redirect(route('pais.index'));
        }

        $this->paisRepository->delete($id);

        Flash::success('Pais eliminado correctamente.');

        return redirect(route('pais.index'));
    }
}
