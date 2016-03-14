<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePruebaespecialRequest;
use App\Http\Requests\UpdatePruebaespecialRequest;
use App\Repositories\PruebaespecialRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PruebaespecialController extends AppBaseController
{
    /** @var  PruebaespecialRepository */
    private $pruebaespecialRepository;

    function __construct(PruebaespecialRepository $pruebaespecialRepo)
    {
        $this->pruebaespecialRepository = $pruebaespecialRepo;
    }

    /**
     * Display a listing of the Pruebaespecial.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pruebaespecialRepository->pushCriteria(new RequestCriteria($request));
        $pruebaespecials = $this->pruebaespecialRepository->paginate(2);

        return view('pruebaespecials.index')
            ->with('pruebaespecials', $pruebaespecials);
    }

    /**
     * Show the form for creating a new Pruebaespecial.
     *
     * @return Response
     */
    public function create()
    {
        return view('pruebaespecials.create');
    }

    /**
     * Store a newly created Pruebaespecial in storage.
     *
     * @param CreatePruebaespecialRequest $request
     *
     * @return Response
     */
    public function store(CreatePruebaespecialRequest $request)
    {
        $input = $request->all();
        $input['fecha']='1990-05-05';
        $pruebaespecial = $this->pruebaespecialRepository->create($input);

        Flash::success('Pruebaespecial saved successfully.');

        return redirect(route('pruebaespecials.index'));
    }

    /**
     * Display the specified Pruebaespecial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pruebaespecial = $this->pruebaespecialRepository->findWithoutFail($id);

        if (empty($pruebaespecial)) {
            Flash::error('Pruebaespecial not found');

            return redirect(route('pruebaespecials.index'));
        }

        return view('pruebaespecials.show')->with('pruebaespecial', $pruebaespecial);
    }

    /**
     * Show the form for editing the specified Pruebaespecial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pruebaespecial = $this->pruebaespecialRepository->findWithoutFail($id);

        if (empty($pruebaespecial)) {
            Flash::error('Pruebaespecial not found');

            return redirect(route('pruebaespecials.index'));
        }

        return view('pruebaespecials.edit')->with('pruebaespecial', $pruebaespecial);
    }

    /**
     * Update the specified Pruebaespecial in storage.
     *
     * @param  int              $id
     * @param UpdatePruebaespecialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePruebaespecialRequest $request)
    {
        $pruebaespecial = $this->pruebaespecialRepository->findWithoutFail($id);

        if (empty($pruebaespecial)) {
            Flash::error('Pruebaespecial not found');

            return redirect(route('pruebaespecials.index'));
        }

        $pruebaespecial = $this->pruebaespecialRepository->update($request->all(), $id);

        Flash::success('Pruebaespecial updated successfully.');

        return redirect(route('pruebaespecials.index'));
    }

    /**
     * Remove the specified Pruebaespecial from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pruebaespecial = $this->pruebaespecialRepository->findWithoutFail($id);

        if (empty($pruebaespecial)) {
            Flash::error('Pruebaespecial not found');

            return redirect(route('pruebaespecials.index'));
        }

        $this->pruebaespecialRepository->delete($id);

        Flash::success('Pruebaespecial deleted successfully.');

        return redirect(route('pruebaespecials.index'));
    }
}
