<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateprogramaRequest;
use App\Http\Requests\UpdateprogramaRequest;
use App\Repositories\programaRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\area;

class programaController extends AppBaseController
{
    /** @var  programaRepository */
    private $programaRepository;

    function __construct(programaRepository $programaRepo)
    {
        $this->middleware('auth');
        $this->programaRepository = $programaRepo;
    }

    /**
     * Display a listing of the programa.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->programaRepository->pushCriteria(new RequestCriteria($request));
        $programas = $this->programaRepository->paginate(15);

       
        return view('programas.index')
            ->with(['programas' => $programas]);
    }

    /**
     * Show the form for creating a new programa.
     *
     * @return Response
     */
    public function create()
    {   
         $ar_area = area::selArea();
        return view('programas.create')->with(['ar_area' => $ar_area]);;
    }

    /**
     * Store a newly created programa in storage.
     *
     * @param CreateprogramaRequest $request
     *
     * @return Response
     */
    public function store(CreateprogramaRequest $request)
    {
        $input = $request->all();

        $programa = $this->programaRepository->create($input);

        Flash::success('programa registrado correctamente.');

        return redirect(route('programas.index'));
    }

    /**
     * Display the specified programa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $programa = $this->programaRepository->findWithoutFail($id);

        if (empty($programa)) {
            Flash::error('programa No se encuentra en encuentra registrado');

            return redirect(route('programas.index'));
        }

        return view('programas.show')->with('programa', $programa);
    }

    /**
     * Show the form for editing the specified programa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $programa = $this->programaRepository->findWithoutFail($id);

        if (empty($programa)) {
            Flash::error('programa No se encuentra en encuentra registrado');

            return redirect(route('programas.index'));
        }

        $ar_area = area::selArea();
        return view('programas.edit')->with(['programa' => $programa, 'ar_area' => $ar_area]);;

    }

    /**
     * Update the specified programa in storage.
     *
     * @param  int              $id
     * @param UpdateprogramaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprogramaRequest $request)
    {
        $programa = $this->programaRepository->findWithoutFail($id);

        if (empty($programa)) {
            Flash::error('programa No se encuentra en encuentra registrado');

            return redirect(route('programas.index'));
        }

        $programa = $this->programaRepository->update($request->all(), $id);

        Flash::success('programa actualizado correctamente.');

        return redirect(route('programas.index'));
    }

    /**
     * Remove the specified programa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $programa = $this->programaRepository->findWithoutFail($id);

        if (empty($programa)) {
            Flash::error('programa No se encuentra en encuentra registrado');

            return redirect(route('programas.index'));
        }

        $this->programaRepository->delete($id);

        Flash::success('programa eliminado correctamente.');

        return redirect(route('programas.index'));
    }
}
