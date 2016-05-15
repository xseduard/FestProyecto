<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProductoGrupoRequest;
use App\Http\Requests\UpdateProductoGrupoRequest;
use App\Repositories\ProductoGrupoRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProductoGrupoController extends AppBaseController
{
    /** @var  ProductoGrupoRepository */
    private $productoGrupoRepository;

    function __construct(ProductoGrupoRepository $productoGrupoRepo)
    {
        $this->productoGrupoRepository = $productoGrupoRepo;
    }

    /**
     * Display a listing of the ProductoGrupo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productoGrupoRepository->pushCriteria(new RequestCriteria($request));
        $productoGrupos = $this->productoGrupoRepository->paginate(10);

        return view('productoGrupos.index')
            ->with('productoGrupos', $productoGrupos);
    }

    /**
     * Show the form for creating a new ProductoGrupo.
     *
     * @return Response
     */
    public function create()
    {
        return view('productoGrupos.create');
    }

    /**
     * Store a newly created ProductoGrupo in storage.
     *
     * @param CreateProductoGrupoRequest $request
     *
     * @return Response
     */
    public function store(CreateProductoGrupoRequest $request)
    {
        $input = $request->all();

        $productoGrupo = $this->productoGrupoRepository->create($input);

        Flash::success('ProductoGrupo registrado correctamente.');

        return redirect(route('productoGrupos.index'));
    }

    /**
     * Display the specified ProductoGrupo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productoGrupo = $this->productoGrupoRepository->findWithoutFail($id);

        if (empty($productoGrupo)) {
            Flash::error('ProductoGrupo No se encuentra en encuentra registrado');

            return redirect(route('productoGrupos.index'));
        }

        return view('productoGrupos.show')->with('productoGrupo', $productoGrupo);
    }

    /**
     * Show the form for editing the specified ProductoGrupo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productoGrupo = $this->productoGrupoRepository->findWithoutFail($id);

        if (empty($productoGrupo)) {
            Flash::error('ProductoGrupo No se encuentra en encuentra registrado');

            return redirect(route('productoGrupos.index'));
        }

        return view('productoGrupos.edit')->with('productoGrupo', $productoGrupo);
    }

    /**
     * Update the specified ProductoGrupo in storage.
     *
     * @param  int              $id
     * @param UpdateProductoGrupoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductoGrupoRequest $request)
    {
        $productoGrupo = $this->productoGrupoRepository->findWithoutFail($id);

        if (empty($productoGrupo)) {
            Flash::error('ProductoGrupo No se encuentra en encuentra registrado');

            return redirect(route('productoGrupos.index'));
        }

        $productoGrupo = $this->productoGrupoRepository->update($request->all(), $id);

        Flash::success('ProductoGrupo actualizado correctamente.');

        return redirect(route('productoGrupos.index'));
    }

    /**
     * Remove the specified ProductoGrupo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productoGrupo = $this->productoGrupoRepository->findWithoutFail($id);

        if (empty($productoGrupo)) {
            Flash::error('ProductoGrupo No se encuentra en encuentra registrado');

            return redirect(route('productoGrupos.index'));
        }

        $this->productoGrupoRepository->delete($id);

        Flash::success('ProductoGrupo eliminado correctamente.');

        return redirect(route('productoGrupos.index'));
    }
}
