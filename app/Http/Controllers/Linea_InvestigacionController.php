<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateLinea_InvestigacionRequest;
use App\Http\Requests\UpdateLinea_InvestigacionRequest;
use App\Repositories\Linea_InvestigacionRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Linea_InvestigacionController extends AppBaseController
{
    /** @var  Linea_InvestigacionRepository */
    private $lineaInvestigacionRepository;

    function __construct(Linea_InvestigacionRepository $lineaInvestigacionRepo)
    {
        $this->lineaInvestigacionRepository = $lineaInvestigacionRepo;
    }

    /**
     * Display a listing of the Linea_Investigacion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->lineaInvestigacionRepository->pushCriteria(new RequestCriteria($request));
        $lineaInvestigacions = $this->lineaInvestigacionRepository->paginate(10);

        return view('lineaInvestigacions.index')
            ->with('lineaInvestigacions', $lineaInvestigacions);
    }

    /**
     * Show the form for creating a new Linea_Investigacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('lineaInvestigacions.create');
    }

    /**
     * Store a newly created Linea_Investigacion in storage.
     *
     * @param CreateLinea_InvestigacionRequest $request
     *
     * @return Response
     */
    public function store(CreateLinea_InvestigacionRequest $request)
    {
        $input = $request->all();

        $lineaInvestigacion = $this->lineaInvestigacionRepository->create($input);

        Flash::success('Linea de Investigación registrada correctamente.');

        return redirect(route('lineaInvestigacions.index'));
    }

    /**
     * Display the specified Linea_Investigacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lineaInvestigacion = $this->lineaInvestigacionRepository->findWithoutFail($id);

        if (empty($lineaInvestigacion)) {
            Flash::error('Linea de Investigación No se encuentra en encuentra registrada');

            return redirect(route('lineaInvestigacions.index'));
        }

        return view('lineaInvestigacions.show')->with('lineaInvestigacion', $lineaInvestigacion);
    }

    /**
     * Show the form for editing the specified Linea_Investigacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lineaInvestigacion = $this->lineaInvestigacionRepository->findWithoutFail($id);

        if (empty($lineaInvestigacion)) {
            Flash::error('Linea de Investigacion No se encuentra en encuentra registrada');

            return redirect(route('lineaInvestigacions.index'));
        }

        return view('lineaInvestigacions.edit')->with('lineaInvestigacion', $lineaInvestigacion);
    }

    /**
     * Update the specified Linea_Investigacion in storage.
     *
     * @param  int              $id
     * @param UpdateLinea_InvestigacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLinea_InvestigacionRequest $request)
    {
        $lineaInvestigacion = $this->lineaInvestigacionRepository->findWithoutFail($id);

        if (empty($lineaInvestigacion)) {
            Flash::error('Linea de Investigación No se encuentra en encuentra registrada');

            return redirect(route('lineaInvestigacions.index'));
        }

        $lineaInvestigacion = $this->lineaInvestigacionRepository->update($request->all(), $id);

        Flash::success('Linea de Investigación actualizada correctamente.');

        return redirect(route('lineaInvestigacions.index'));
    }

    /**
     * Remove the specified Linea_Investigacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lineaInvestigacion = $this->lineaInvestigacionRepository->findWithoutFail($id);

        if (empty($lineaInvestigacion)) {
            Flash::error('Linea de Investigación No se encuentra en encuentra registrada');

            return redirect(route('lineaInvestigacions.index'));
        }

        $this->lineaInvestigacionRepository->delete($id);

        Flash::success('Linea de Investigacion eliminada correctamente.');

        return redirect(route('lineaInvestigacions.index'));
    }
}
