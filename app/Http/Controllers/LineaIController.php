<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateLineaIRequest;
use App\Http\Requests\UpdateLineaIRequest;
use App\Repositories\LineaIRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LineaIController extends AppBaseController
{
    /** @var  LineaIRepository */
    private $lineaIRepository;

    function __construct(LineaIRepository $lineaIRepo)
    {
        $this->lineaIRepository = $lineaIRepo;
    }

    /**
     * Display a listing of the LineaI.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->lineaIRepository->pushCriteria(new RequestCriteria($request));
        $lineaIs = $this->lineaIRepository->paginate(10);

        return view('lineaIs.index')
            ->with('lineaIs', $lineaIs);
    }

    /**
     * Show the form for creating a new LineaI.
     *
     * @return Response
     */
    public function create()
    {
        return view('lineaIs.create');
    }

    /**
     * Store a newly created LineaI in storage.
     *
     * @param CreateLineaIRequest $request
     *
     * @return Response
     */
    public function store(CreateLineaIRequest $request)
    {
        $input = $request->all();

        $lineaI = $this->lineaIRepository->create($input);

        Flash::success('LineaI registrado correctamente.');

        return redirect(route('lineaIs.index'));
    }

    /**
     * Display the specified LineaI.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lineaI = $this->lineaIRepository->findWithoutFail($id);

        if (empty($lineaI)) {
            Flash::error('LineaI No se encuentra en encuentra registrado');

            return redirect(route('lineaIs.index'));
        }

        return view('lineaIs.show')->with('lineaI', $lineaI);
    }

    /**
     * Show the form for editing the specified LineaI.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lineaI = $this->lineaIRepository->findWithoutFail($id);

        if (empty($lineaI)) {
            Flash::error('LineaI No se encuentra en encuentra registrado');

            return redirect(route('lineaIs.index'));
        }

        return view('lineaIs.edit')->with('lineaI', $lineaI);
    }

    /**
     * Update the specified LineaI in storage.
     *
     * @param  int              $id
     * @param UpdateLineaIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLineaIRequest $request)
    {
        $lineaI = $this->lineaIRepository->findWithoutFail($id);

        if (empty($lineaI)) {
            Flash::error('LineaI No se encuentra en encuentra registrado');

            return redirect(route('lineaIs.index'));
        }

        $lineaI = $this->lineaIRepository->update($request->all(), $id);

        Flash::success('LineaI actualizado correctamente.');

        return redirect(route('lineaIs.index'));
    }

    /**
     * Remove the specified LineaI from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lineaI = $this->lineaIRepository->findWithoutFail($id);

        if (empty($lineaI)) {
            Flash::error('LineaI No se encuentra en encuentra registrado');

            return redirect(route('lineaIs.index'));
        }

        $this->lineaIRepository->delete($id);

        Flash::success('LineaI eliminado correctamente.');

        return redirect(route('lineaIs.index'));
    }
}
