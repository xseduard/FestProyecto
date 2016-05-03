<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePonenciaRequest;
use App\Http\Requests\UpdatePonenciaRequest;
use App\Repositories\PonenciaRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PonenciaController extends AppBaseController
{
    /** @var  PonenciaRepository */
    private $ponenciaRepository;

    function __construct(PonenciaRepository $ponenciaRepo)
    {
        $this->ponenciaRepository = $ponenciaRepo;
    }

    /**
     * Display a listing of the Ponencia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ponenciaRepository->pushCriteria(new RequestCriteria($request));
        $ponencias = $this->ponenciaRepository->paginate(10);

        return view('ponencias.index')
            ->with('ponencias', $ponencias);
    }

    /**
     * Show the form for creating a new Ponencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('ponencias.create');
    }

    /**
     * Store a newly created Ponencia in storage.
     *
     * @param CreatePonenciaRequest $request
     *
     * @return Response
     */
    public function store(CreatePonenciaRequest $request)
    {
        $input = $request->all();

        $ponencia = $this->ponenciaRepository->create($input);

        Flash::success('Ponencia Registrado correctamente.');

        return redirect(route('ponencias.index'));
    }

    /**
     * Display the specified Ponencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ponencia = $this->ponenciaRepository->findWithoutFail($id);

        if (empty($ponencia)) {
            Flash::error('Ponencia No se encuentra en encuentra registrado');

            return redirect(route('ponencias.index'));
        }

        return view('ponencias.show')->with('ponencia', $ponencia);
    }

    /**
     * Show the form for editing the specified Ponencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ponencia = $this->ponenciaRepository->findWithoutFail($id);

        if (empty($ponencia)) {
            Flash::error('Ponencia No se encuentra en encuentra registrado');

            return redirect(route('ponencias.index'));
        }

        return view('ponencias.edit')->with('ponencia', $ponencia);
    }

    /**
     * Update the specified Ponencia in storage.
     *
     * @param  int              $id
     * @param UpdatePonenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePonenciaRequest $request)
    {
        $ponencia = $this->ponenciaRepository->findWithoutFail($id);

        if (empty($ponencia)) {
            Flash::error('Ponencia No se encuentra en encuentra registrado');

            return redirect(route('ponencias.index'));
        }

        $ponencia = $this->ponenciaRepository->update($request->all(), $id);

        Flash::success('Ponencia Actualizado correctamente.');

        return redirect(route('ponencias.index'));
    }

    /**
     * Remove the specified Ponencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ponencia = $this->ponenciaRepository->findWithoutFail($id);

        if (empty($ponencia)) {
            Flash::error('Ponencia No se encuentra en encuentra registrado');

            return redirect(route('ponencias.index'));
        }

        $this->ponenciaRepository->delete($id);

        Flash::success('Ponencia Eliminado correctamente.');

        return redirect(route('ponencias.index'));
    }
}
