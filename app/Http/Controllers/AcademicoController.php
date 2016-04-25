<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateAcademicoRequest;
use App\Http\Requests\UpdateAcademicoRequest;
use App\Repositories\AcademicoRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AcademicoController extends AppBaseController
{
    /** @var  AcademicoRepository */
    private $academicoRepository;

    function __construct(AcademicoRepository $academicoRepo)
    {
        $this->academicoRepository = $academicoRepo;
    }

    /**
     * Display a listing of the Academico.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->academicoRepository->pushCriteria(new RequestCriteria($request));
        $academicos = $this->academicoRepository->paginate(10);

        return view('academicos.index')
            ->with('academicos', $academicos);
    }

    /**
     * Show the form for creating a new Academico.
     *
     * @return Response
     */
    public function create()
    {
        return view('academicos.create');
    }

    /**
     * Store a newly created Academico in storage.
     *
     * @param CreateAcademicoRequest $request
     *
     * @return Response
     */
    public function store(CreateAcademicoRequest $request)
    {
        $input = $request->all();

        $academico = $this->academicoRepository->create($input);

        Flash::success('Academico Registrado correctamente.');

        return redirect(route('academicos.index'));
    }

    /**
     * Display the specified Academico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $academico = $this->academicoRepository->findWithoutFail($id);

        if (empty($academico)) {
            Flash::error('Academico No se encuentra en encuentra registrado');

            return redirect(route('academicos.index'));
        }

        return view('academicos.show')->with('academico', $academico);
    }

    /**
     * Show the form for editing the specified Academico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $academico = $this->academicoRepository->findWithoutFail($id);

        if (empty($academico)) {
            Flash::error('Academico No se encuentra en encuentra registrado');

            return redirect(route('academicos.index'));
        }

        return view('academicos.edit')->with('academico', $academico);
    }

    /**
     * Update the specified Academico in storage.
     *
     * @param  int              $id
     * @param UpdateAcademicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAcademicoRequest $request)
    {
        $academico = $this->academicoRepository->findWithoutFail($id);

        if (empty($academico)) {
            Flash::error('Academico No se encuentra en encuentra registrado');

            return redirect(route('academicos.index'));
        }

        $academico = $this->academicoRepository->update($request->all(), $id);

        Flash::success('Academico Actualizado correctamente.');

        return redirect(route('academicos.index'));
    }

    /**
     * Remove the specified Academico from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $academico = $this->academicoRepository->findWithoutFail($id);

        if (empty($academico)) {
            Flash::error('Academico No se encuentra en encuentra registrado');

            return redirect(route('academicos.index'));
        }

        $this->academicoRepository->delete($id);

        Flash::success('Academico Eliminado correctamente.');

        return redirect(route('academicos.index'));
    }
}
