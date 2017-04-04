<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateAreainvestigacionRequest;
use App\Http\Requests\UpdateAreainvestigacionRequest;
use App\Repositories\AreainvestigacionRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AreainvestigacionController extends AppBaseController
{
    /** @var  AreainvestigacionRepository */
    private $areainvestigacionRepository;

    function __construct(AreainvestigacionRepository $areainvestigacionRepo)
    {
        $this->areainvestigacionRepository = $areainvestigacionRepo;
    }

    /**
     * Display a listing of the Areainvestigacion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->areainvestigacionRepository->pushCriteria(new RequestCriteria($request));
        $areainvestigacions = $this->areainvestigacionRepository->paginate(10);

        return view('areainvestigacions.index')
            ->with('areainvestigacions', $areainvestigacions);
    }

    /**
     * Show the form for creating a new Areainvestigacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('areainvestigacions.create');
    }

    /**
     * Store a newly created Areainvestigacion in storage.
     *
     * @param CreateAreainvestigacionRequest $request
     *
     * @return Response
     */
    public function store(CreateAreainvestigacionRequest $request)
    {
        $input = $request->all();

        $areainvestigacion = $this->areainvestigacionRepository->create($input);

        Flash::success('Areainvestigacion registrado correctamente.');

        return redirect(route('areainvestigacions.index'));
    }

    /**
     * Display the specified Areainvestigacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $areainvestigacion = $this->areainvestigacionRepository->findWithoutFail($id);

        if (empty($areainvestigacion)) {
            Flash::error('Areainvestigacion No se encuentra en encuentra registrado');

            return redirect(route('areainvestigacions.index'));
        }

        return view('areainvestigacions.show')->with('areainvestigacion', $areainvestigacion);
    }

    /**
     * Show the form for editing the specified Areainvestigacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $areainvestigacion = $this->areainvestigacionRepository->findWithoutFail($id);

        if (empty($areainvestigacion)) {
            Flash::error('Areainvestigacion No se encuentra en encuentra registrado');

            return redirect(route('areainvestigacions.index'));
        }

        return view('areainvestigacions.edit')->with('areainvestigacion', $areainvestigacion);
    }

    /**
     * Update the specified Areainvestigacion in storage.
     *
     * @param  int              $id
     * @param UpdateAreainvestigacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAreainvestigacionRequest $request)
    {
        $areainvestigacion = $this->areainvestigacionRepository->findWithoutFail($id);

        if (empty($areainvestigacion)) {
            Flash::error('Areainvestigacion No se encuentra en encuentra registrado');

            return redirect(route('areainvestigacions.index'));
        }

        $areainvestigacion = $this->areainvestigacionRepository->update($request->all(), $id);

        Flash::success('Areainvestigacion actualizado correctamente.');

        return redirect(route('areainvestigacions.index'));
    }

    /**
     * Remove the specified Areainvestigacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $areainvestigacion = $this->areainvestigacionRepository->findWithoutFail($id);

        if (empty($areainvestigacion)) {
            Flash::error('Areainvestigacion No se encuentra en encuentra registrado');

            return redirect(route('areainvestigacions.index'));
        }

        $this->areainvestigacionRepository->delete($id);

        Flash::success('Areainvestigacion eliminado correctamente.');

        return redirect(route('areainvestigacions.index'));
    }
}
