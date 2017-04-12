<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateareaRequest;
use App\Http\Requests\UpdateareaRequest;
use App\Repositories\areaRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class areaController extends AppBaseController
{
    /** @var  areaRepository */
    private $areaRepository;

    function __construct(areaRepository $areaRepo)
    {
        $this->middleware('auth');
        $this->areaRepository = $areaRepo;
    }

    /**
     * Display a listing of the area.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->areaRepository->pushCriteria(new RequestCriteria($request));
        $areas = $this->areaRepository->paginate(10);

        return view('areas.index')
            ->with('areas', $areas);
    }

    /**
     * Show the form for creating a new area.
     *
     * @return Response
     */
    public function create()
    {
        return view('areas.create');
    }

    /**
     * Store a newly created area in storage.
     *
     * @param CreateareaRequest $request
     *
     * @return Response
     */
    public function store(CreateareaRequest $request)
    {
        $input = $request->all();

        $area = $this->areaRepository->create($input);

        Flash::success('area registrado correctamente.');

        return redirect(route('areas.index'));
    }

    /**
     * Display the specified area.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $area = $this->areaRepository->findWithoutFail($id);

        if (empty($area)) {
            Flash::error('area No se encuentra en encuentra registrado');

            return redirect(route('areas.index'));
        }

        return view('areas.show')->with('area', $area);
    }

    /**
     * Show the form for editing the specified area.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $area = $this->areaRepository->findWithoutFail($id);

        if (empty($area)) {
            Flash::error('area No se encuentra en encuentra registrado');

            return redirect(route('areas.index'));
        }

        return view('areas.edit')->with('area', $area);
    }

    /**
     * Update the specified area in storage.
     *
     * @param  int              $id
     * @param UpdateareaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateareaRequest $request)
    {
        $area = $this->areaRepository->findWithoutFail($id);

        if (empty($area)) {
            Flash::error('area No se encuentra en encuentra registrado');

            return redirect(route('areas.index'));
        }

        $area = $this->areaRepository->update($request->all(), $id);

        Flash::success('area actualizado correctamente.');

        return redirect(route('areas.index'));
    }

    /**
     * Remove the specified area from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $area = $this->areaRepository->findWithoutFail($id);

        if (empty($area)) {
            Flash::error('area No se encuentra en encuentra registrado');

            return redirect(route('areas.index'));
        }

        $this->areaRepository->delete($id);

        Flash::success('area eliminado correctamente.');

        return redirect(route('areas.index'));
    }
}
