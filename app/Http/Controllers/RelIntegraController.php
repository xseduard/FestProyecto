<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateRelIntegraRequest;
use App\Http\Requests\UpdateRelIntegraRequest;
use App\Repositories\RelIntegraRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RelIntegraController extends AppBaseController
{
    /** @var  RelIntegraRepository */
    private $relIntegraRepository;

    function __construct(RelIntegraRepository $relIntegraRepo)
    {
        $this->relIntegraRepository = $relIntegraRepo;
    }

    /**
     * Display a listing of the RelIntegra.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->relIntegraRepository->pushCriteria(new RequestCriteria($request));
        $relIntegras = $this->relIntegraRepository->paginate(10);

        return view('relIntegras.index')
            ->with('relIntegras', $relIntegras);
    }

    /**
     * Show the form for creating a new RelIntegra.
     *
     * @return Response
     */
    public function create()
    {
        return view('relIntegras.create');
    }

    /**
     * Store a newly created RelIntegra in storage.
     *
     * @param CreateRelIntegraRequest $request
     *
     * @return Response
     */
    public function store(CreateRelIntegraRequest $request)
    {
        $input = $request->all();

        $relIntegra = $this->relIntegraRepository->create($input);

        Flash::success('RelIntegra registrado correctamente.');

        return redirect(route('relIntegras.index'));
    }

    /**
     * Display the specified RelIntegra.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $relIntegra = $this->relIntegraRepository->findWithoutFail($id);

        if (empty($relIntegra)) {
            Flash::error('RelIntegra No se encuentra en encuentra registrado');

            return redirect(route('relIntegras.index'));
        }

        return view('relIntegras.show')->with('relIntegra', $relIntegra);
    }

    /**
     * Show the form for editing the specified RelIntegra.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $relIntegra = $this->relIntegraRepository->findWithoutFail($id);

        if (empty($relIntegra)) {
            Flash::error('RelIntegra No se encuentra en encuentra registrado');

            return redirect(route('relIntegras.index'));
        }

        return view('relIntegras.edit')->with('relIntegra', $relIntegra);
    }

    /**
     * Update the specified RelIntegra in storage.
     *
     * @param  int              $id
     * @param UpdateRelIntegraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRelIntegraRequest $request)
    {
        $relIntegra = $this->relIntegraRepository->findWithoutFail($id);

        if (empty($relIntegra)) {
            Flash::error('RelIntegra No se encuentra en encuentra registrado');

            return redirect(route('relIntegras.index'));
        }

        $relIntegra = $this->relIntegraRepository->update($request->all(), $id);

        Flash::success('RelIntegra actualizado correctamente.');

        return redirect(route('relIntegras.index'));
    }

    /**
     * Remove the specified RelIntegra from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $relIntegra = $this->relIntegraRepository->findWithoutFail($id);

        if (empty($relIntegra)) {
            Flash::error('RelIntegra No se encuentra en encuentra registrado');

            return redirect(route('relIntegras.index'));
        }

        $this->relIntegraRepository->delete($id);

        Flash::success('RelIntegra eliminado correctamente.');

        return redirect(route('relIntegras.index'));
    }
}
