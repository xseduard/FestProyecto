<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateTrabajoGradoRequest;
use App\Http\Requests\UpdateTrabajoGradoRequest;
use App\Repositories\TrabajoGradoRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TrabajoGradoController extends AppBaseController
{
    /** @var  TrabajoGradoRepository */
    private $trabajoGradoRepository;

    function __construct(TrabajoGradoRepository $trabajoGradoRepo)
    {
        $this->trabajoGradoRepository = $trabajoGradoRepo;
    }

    /**
     * Display a listing of the TrabajoGrado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->trabajoGradoRepository->pushCriteria(new RequestCriteria($request));
        $trabajoGrados = $this->trabajoGradoRepository->paginate(10);

        return view('trabajoGrados.index')
            ->with('trabajoGrados', $trabajoGrados);
    }

    /**
     * Show the form for creating a new TrabajoGrado.
     *
     * @return Response
     */
    public function create()
    {
        return view('trabajoGrados.create');
    }

    /**
     * Store a newly created TrabajoGrado in storage.
     *
     * @param CreateTrabajoGradoRequest $request
     *
     * @return Response
     */
    public function store(CreateTrabajoGradoRequest $request)
    {
        $input = $request->all();

        $trabajoGrado = $this->trabajoGradoRepository->create($input);

        Flash::success('TrabajoGrado registrado correctamente.');

        return redirect(route('trabajoGrados.index'));
    }

    /**
     * Display the specified TrabajoGrado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trabajoGrado = $this->trabajoGradoRepository->findWithoutFail($id);

        if (empty($trabajoGrado)) {
            Flash::error('TrabajoGrado No se encuentra en encuentra registrado');

            return redirect(route('trabajoGrados.index'));
        }

        return view('trabajoGrados.show')->with('trabajoGrado', $trabajoGrado);
    }

    /**
     * Show the form for editing the specified TrabajoGrado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trabajoGrado = $this->trabajoGradoRepository->findWithoutFail($id);

        if (empty($trabajoGrado)) {
            Flash::error('TrabajoGrado No se encuentra en encuentra registrado');

            return redirect(route('trabajoGrados.index'));
        }

        return view('trabajoGrados.edit')->with('trabajoGrado', $trabajoGrado);
    }

    /**
     * Update the specified TrabajoGrado in storage.
     *
     * @param  int              $id
     * @param UpdateTrabajoGradoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrabajoGradoRequest $request)
    {
        $trabajoGrado = $this->trabajoGradoRepository->findWithoutFail($id);

        if (empty($trabajoGrado)) {
            Flash::error('TrabajoGrado No se encuentra en encuentra registrado');

            return redirect(route('trabajoGrados.index'));
        }

        $trabajoGrado = $this->trabajoGradoRepository->update($request->all(), $id);

        Flash::success('TrabajoGrado actualizado correctamente.');

        return redirect(route('trabajoGrados.index'));
    }

    /**
     * Remove the specified TrabajoGrado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trabajoGrado = $this->trabajoGradoRepository->findWithoutFail($id);

        if (empty($trabajoGrado)) {
            Flash::error('TrabajoGrado No se encuentra en encuentra registrado');

            return redirect(route('trabajoGrados.index'));
        }

        $this->trabajoGradoRepository->delete($id);

        Flash::success('TrabajoGrado eliminado correctamente.');

        return redirect(route('trabajoGrados.index'));
    }
}
