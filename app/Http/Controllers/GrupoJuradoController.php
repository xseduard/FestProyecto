<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateGrupoJuradoRequest;
use App\Http\Requests\UpdateGrupoJuradoRequest;
use App\Repositories\GrupoJuradoRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Regional;

class GrupoJuradoController extends AppBaseController
{
    /** @var  GrupoJuradoRepository */
    private $grupoJuradoRepository;

    function __construct(GrupoJuradoRepository $grupoJuradoRepo)
    {
        $this->grupoJuradoRepository = $grupoJuradoRepo;
    }

    /**
     * Display a listing of the GrupoJurado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->grupoJuradoRepository->pushCriteria(new RequestCriteria($request));
        $grupoJurados = $this->grupoJuradoRepository->paginate(10);

        return view('grupoJurados.index')
            ->with('grupoJurados', $grupoJurados);
    }

    /**
     * Show the form for creating a new GrupoJurado.
     *
     * @return Response
     */
    public function create()
    {
        $selectores = [
             'regionals'=> Regional::selRegional()
        ];

        return view('grupoJurados.create')->with(['selectores' => $selectores]);

    }

    /**
     * Store a newly created GrupoJurado in storage.
     *
     * @param CreateGrupoJuradoRequest $request
     *
     * @return Response
     */
    public function store(CreateGrupoJuradoRequest $request)
    {
        $input = $request->all();

        $grupoJurado = $this->grupoJuradoRepository->create($input);

        Flash::success('GrupoJurado registrado correctamente.');

        return redirect(route('grupoJurados.index'));
    }

    /**
     * Display the specified GrupoJurado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $grupoJurado = $this->grupoJuradoRepository->findWithoutFail($id);

        if (empty($grupoJurado)) {
            Flash::error('GrupoJurado No se encuentra en encuentra registrado');

            return redirect(route('grupoJurados.index'));
        }

        return view('grupoJurados.show')->with('grupoJurado', $grupoJurado);
    }

    /**
     * Show the form for editing the specified GrupoJurado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $grupoJurado = $this->grupoJuradoRepository->findWithoutFail($id);

        if (empty($grupoJurado)) {
            Flash::error('GrupoJurado No se encuentra en encuentra registrado');

            return redirect(route('grupoJurados.index'));
        }

        return view('grupoJurados.edit')->with('grupoJurado', $grupoJurado);
    }

    /**
     * Update the specified GrupoJurado in storage.
     *
     * @param  int              $id
     * @param UpdateGrupoJuradoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGrupoJuradoRequest $request)
    {
        $grupoJurado = $this->grupoJuradoRepository->findWithoutFail($id);

        if (empty($grupoJurado)) {
            Flash::error('GrupoJurado No se encuentra en encuentra registrado');

            return redirect(route('grupoJurados.index'));
        }

        $grupoJurado = $this->grupoJuradoRepository->update($request->all(), $id);

        Flash::success('GrupoJurado actualizado correctamente.');

        return redirect(route('grupoJurados.index'));
    }

    /**
     * Remove the specified GrupoJurado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $grupoJurado = $this->grupoJuradoRepository->findWithoutFail($id);

        if (empty($grupoJurado)) {
            Flash::error('GrupoJurado No se encuentra en encuentra registrado');

            return redirect(route('grupoJurados.index'));
        }

        $this->grupoJuradoRepository->delete($id);

        Flash::success('GrupoJurado eliminado correctamente.');

        return redirect(route('grupoJurados.index'));
    }
}
