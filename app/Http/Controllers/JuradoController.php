<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateJuradoRequest;
use App\Http\Requests\UpdateJuradoRequest;
use App\Repositories\JuradoRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\GrupoJurado;
use App\Models\area;
use App\Models\Linea_Investigacion;

class JuradoController extends AppBaseController
{
    /** @var  JuradoRepository */
    private $juradoRepository;

    function __construct(JuradoRepository $juradoRepo)
    {
        $this->juradoRepository = $juradoRepo;
    }

    /**
     * Display a listing of the Jurado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->juradoRepository->pushCriteria(new RequestCriteria($request));
        $jurados = $this->juradoRepository->paginate(10);

        return view('jurados.index')
            ->with('jurados', $jurados);
    }

    /**
     * Show the form for creating a new Jurado.
     *
     * @return Response
     */
    public function create()
    {


        $selectores = [
        'grupojurados' => GrupoJurado::selGrupoJurado(),
        'areas'=> area::selArea(),
        'lineas'=> Linea_Investigacion::selLinea()
        ];

        return view('jurados.create')->with(['selectores' => $selectores]);
       
    }

    /**
     * Store a newly created Jurado in storage.
     *
     * @param CreateJuradoRequest $request
     *
     * @return Response
     */
    public function store(CreateJuradoRequest $request)
    {
        $input = $request->all();

        $jurado = $this->juradoRepository->create($input);

        Flash::success('Jurado registrado correctamente.');

        return redirect(route('jurados.index'));
    }

    /**
     * Display the specified Jurado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jurado = $this->juradoRepository->findWithoutFail($id);

        if (empty($jurado)) {
            Flash::error('Jurado No se encuentra en encuentra registrado');

            return redirect(route('jurados.index'));
        }

        return view('jurados.show')->with('jurado', $jurado);
    }

    /**
     * Show the form for editing the specified Jurado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jurado = $this->juradoRepository->findWithoutFail($id);

        if (empty($jurado)) {
            Flash::error('Jurado No se encuentra en encuentra registrado');

            return redirect(route('jurados.index'));
        }

        $selectores = [
        'grupojurados' => GrupoJurado::selGrupoJurado(),
        'areas'=> area::selArea(),
        'lineas'=> Linea_Investigacion::selLinea()
        ];

        return view('jurados.edit')->with(['jurado' => $jurado, 'selectores' => $selectores]);

    }

    /**
     * Update the specified Jurado in storage.
     *
     * @param  int              $id
     * @param UpdateJuradoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJuradoRequest $request)
    {
        $jurado = $this->juradoRepository->findWithoutFail($id);

        if (empty($jurado)) {
            Flash::error('Jurado No se encuentra en encuentra registrado');

            return redirect(route('jurados.index'));
        }

        $jurado = $this->juradoRepository->update($request->all(), $id);

        Flash::success('Jurado actualizado correctamente.');

        return redirect(route('jurados.index'));
    }

    /**
     * Remove the specified Jurado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jurado = $this->juradoRepository->findWithoutFail($id);

        if (empty($jurado)) {
            Flash::error('Jurado No se encuentra en encuentra registrado');

            return redirect(route('jurados.index'));
        }

        $this->juradoRepository->delete($id);

        Flash::success('Jurado eliminado correctamente.');

        return redirect(route('jurados.index'));
    }
}
