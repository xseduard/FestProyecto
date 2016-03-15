<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateMarioRequest;
use App\Http\Requests\UpdateMarioRequest;
use App\Repositories\MarioRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MarioController extends AppBaseController
{
    /** @var  MarioRepository */
    private $marioRepository;

    function __construct(MarioRepository $marioRepo)
    {
        $this->marioRepository = $marioRepo;
    }

    /**
     * Display a listing of the Mario.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->marioRepository->pushCriteria(new RequestCriteria($request));
        $marios = $this->marioRepository->paginate(10);

        return view('marios.index')
            ->with('marios', $marios);
    }

    /**
     * Show the form for creating a new Mario.
     *
     * @return Response
     */
    public function create()
    {
        return view('marios.create');
    }

    /**
     * Store a newly created Mario in storage.
     *
     * @param CreateMarioRequest $request
     *
     * @return Response
     */
    public function store(CreateMarioRequest $request)
    {
        $input = $request->all();

        $mario = $this->marioRepository->create($input);

        Flash::success('Mario Registrado correctamente.');

        return redirect(route('marios.index'));
    }

    /**
     * Display the specified Mario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mario = $this->marioRepository->findWithoutFail($id);

        if (empty($mario)) {
            Flash::error('Mario No se encuentra en encuentra registrado');

            return redirect(route('marios.index'));
        }

        return view('marios.show')->with('mario', $mario);
    }

    /**
     * Show the form for editing the specified Mario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mario = $this->marioRepository->findWithoutFail($id);

        if (empty($mario)) {
            Flash::error('Mario No se encuentra en encuentra registrado');

            return redirect(route('marios.index'));
        }

        return view('marios.edit')->with('mario', $mario);
    }

    /**
     * Update the specified Mario in storage.
     *
     * @param  int              $id
     * @param UpdateMarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMarioRequest $request)
    {
        $mario = $this->marioRepository->findWithoutFail($id);

        if (empty($mario)) {
            Flash::error('Mario No se encuentra en encuentra registrado');

            return redirect(route('marios.index'));
        }

        $mario = $this->marioRepository->update($request->all(), $id);

        Flash::success('Mario Actualizado correctamente.');

        return redirect(route('marios.index'));
    }

    /**
     * Remove the specified Mario from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mario = $this->marioRepository->findWithoutFail($id);

        if (empty($mario)) {
            Flash::error('Mario No se encuentra en encuentra registrado');

            return redirect(route('marios.index'));
        }

        $this->marioRepository->delete($id);

        Flash::success('Mario Eliminado correctamente.');

        return redirect(route('marios.index'));
    }
}
