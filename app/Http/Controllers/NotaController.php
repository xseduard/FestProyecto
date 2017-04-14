<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateNotaRequest;
use App\Http\Requests\UpdateNotaRequest;
use App\Repositories\NotaRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class NotaController extends AppBaseController
{
    /** @var  NotaRepository */
    private $notaRepository;

    function __construct(NotaRepository $notaRepo)
    {
        $this->notaRepository = $notaRepo;
    }

    /**
     * Display a listing of the Nota.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->notaRepository->pushCriteria(new RequestCriteria($request));
        $notas = $this->notaRepository->paginate(10);

        return view('notas.index')
            ->with('notas', $notas);
    }

    /**
     * Show the form for creating a new Nota.
     *
     * @return Response
     */
    public function create()
    {
        return view('notas.create');
    }

    /**
     * Store a newly created Nota in storage.
     *
     * @param CreateNotaRequest $request
     *
     * @return Response
     */
    public function store(CreateNotaRequest $request)
    {
        $input = $request->all();

        $nota = $this->notaRepository->create($input);

        Flash::success('Nota registrado correctamente.');

        return redirect(route('notas.index'));
    }

    /**
     * Display the specified Nota.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nota = $this->notaRepository->findWithoutFail($id);

        if (empty($nota)) {
            Flash::error('Nota No se encuentra en encuentra registrado');

            return redirect(route('notas.index'));
        }

        return view('notas.show')->with('nota', $nota);
    }

    /**
     * Show the form for editing the specified Nota.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nota = $this->notaRepository->findWithoutFail($id);

        if (empty($nota)) {
            Flash::error('Nota No se encuentra en encuentra registrado');

            return redirect(route('notas.index'));
        }

        return view('notas.edit')->with('nota', $nota);
    }

    /**
     * Update the specified Nota in storage.
     *
     * @param  int              $id
     * @param UpdateNotaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNotaRequest $request)
    {
        $nota = $this->notaRepository->findWithoutFail($id);

        if (empty($nota)) {
            Flash::error('Nota No se encuentra en encuentra registrado');

            return redirect(route('notas.index'));
        }

        $nota = $this->notaRepository->update($request->all(), $id);

        Flash::success('Nota actualizado correctamente.');

        return redirect(route('notas.index'));
    }

    /**
     * Remove the specified Nota from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nota = $this->notaRepository->findWithoutFail($id);

        if (empty($nota)) {
            Flash::error('Nota No se encuentra en encuentra registrado');

            return redirect(route('notas.index'));
        }

        $this->notaRepository->delete($id);

        Flash::success('Nota eliminado correctamente.');

        return redirect(route('notas.index'));
    }
}
