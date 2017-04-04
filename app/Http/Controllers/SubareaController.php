<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateSubareaRequest;
use App\Http\Requests\UpdateSubareaRequest;
use App\Repositories\SubareaRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SubareaController extends AppBaseController
{
    /** @var  SubareaRepository */
    private $subareaRepository;

    function __construct(SubareaRepository $subareaRepo)
    {
        $this->subareaRepository = $subareaRepo;
    }

    /**
     * Display a listing of the Subarea.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->subareaRepository->pushCriteria(new RequestCriteria($request));
        $subareas = $this->subareaRepository->paginate(10);

        return view('subareas.index')
            ->with('subareas', $subareas);
    }

    /**
     * Show the form for creating a new Subarea.
     *
     * @return Response
     */
    public function create()
    {
        return view('subareas.create');
    }

    /**
     * Store a newly created Subarea in storage.
     *
     * @param CreateSubareaRequest $request
     *
     * @return Response
     */
    public function store(CreateSubareaRequest $request)
    {
        $input = $request->all();

        $subarea = $this->subareaRepository->create($input);

        Flash::success('Subarea registrado correctamente.');

        return redirect(route('subareas.index'));
    }

    /**
     * Display the specified Subarea.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subarea = $this->subareaRepository->findWithoutFail($id);

        if (empty($subarea)) {
            Flash::error('Subarea No se encuentra en encuentra registrado');

            return redirect(route('subareas.index'));
        }

        return view('subareas.show')->with('subarea', $subarea);
    }

    /**
     * Show the form for editing the specified Subarea.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subarea = $this->subareaRepository->findWithoutFail($id);

        if (empty($subarea)) {
            Flash::error('Subarea No se encuentra en encuentra registrado');

            return redirect(route('subareas.index'));
        }

        return view('subareas.edit')->with('subarea', $subarea);
    }

    /**
     * Update the specified Subarea in storage.
     *
     * @param  int              $id
     * @param UpdateSubareaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubareaRequest $request)
    {
        $subarea = $this->subareaRepository->findWithoutFail($id);

        if (empty($subarea)) {
            Flash::error('Subarea No se encuentra en encuentra registrado');

            return redirect(route('subareas.index'));
        }

        $subarea = $this->subareaRepository->update($request->all(), $id);

        Flash::success('Subarea actualizado correctamente.');

        return redirect(route('subareas.index'));
    }

    /**
     * Remove the specified Subarea from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subarea = $this->subareaRepository->findWithoutFail($id);

        if (empty($subarea)) {
            Flash::error('Subarea No se encuentra en encuentra registrado');

            return redirect(route('subareas.index'));
        }

        $this->subareaRepository->delete($id);

        Flash::success('Subarea eliminado correctamente.');

        return redirect(route('subareas.index'));
    }
}
