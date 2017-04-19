<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTituloAPIRequest;
use App\Http\Requests\API\UpdateTituloAPIRequest;
use App\Models\Titulo;
use App\Repositories\TituloRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class TituloController
 * @package App\Http\Controllers\API
 */

class TituloAPIController extends AppBaseController
{
    /** @var  TituloRepository */
    private $tituloRepository;

    function __construct(TituloRepository $tituloRepo)
    {
        $this->tituloRepository = $tituloRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/titulos",
     *      summary="Get a listing of the Titulos.",
     *      tags={"Titulo"},
     *      description="Get all Titulos",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Titulo")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $this->tituloRepository->pushCriteria(new RequestCriteria($request));
        $this->tituloRepository->pushCriteria(new LimitOffsetCriteria($request));
        $titulos = $this->tituloRepository->all();

        return $this->sendResponse($titulos->toArray(), "Titulos retrieved successfully");
    }

    /**
     * @param CreateTituloAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/titulos",
     *      summary="Store a newly created Titulo in storage",
     *      tags={"Titulo"},
     *      description="Store Titulo",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Titulo that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Titulo")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Titulo"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateTituloAPIRequest $request)
    {
        $input = $request->all();

        $titulos = $this->tituloRepository->create($input);

        return $this->sendResponse($titulos->toArray(), "Titulo saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/titulos/{id}",
     *      summary="Display the specified Titulo",
     *      tags={"Titulo"},
     *      description="Get Titulo",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Titulo",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Titulo"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var Titulo $titulo */
        $titulo = $this->tituloRepository->find($id);

        if(empty($titulo)) {
            return Response::json(ResponseUtil::makeError("Titulo not found"), 400);
        }

        return $this->sendResponse($titulo->toArray(), "Titulo retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateTituloAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/titulos/{id}",
     *      summary="Update the specified Titulo in storage",
     *      tags={"Titulo"},
     *      description="Update Titulo",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Titulo",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Titulo that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Titulo")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Titulo"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateTituloAPIRequest $request)
    {
        $input = $request->all();

        /** @var Titulo $titulo */
        $titulo = $this->tituloRepository->find($id);

        if (empty($titulo)) {
            return Response::json(ResponseUtil::makeError("Titulo not found"), 400);
        }

        $titulo = $this->tituloRepository->update($input, $id);

        return $this->sendResponse($titulo->toArray(), "Titulo updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/titulos/{id}",
     *      summary="Remove the specified Titulo from storage",
     *      tags={"Titulo"},
     *      description="Delete Titulo",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Titulo",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var Titulo $titulo */
        $titulo = $this->tituloRepository->find($id);

        if(empty($titulo)) {
            return Response::json(ResponseUtil::makeError("Titulo not found"), 400);
        }

        $titulo->delete();

        return $this->sendResponse($id, "Titulo deleted successfully");
    }
}
