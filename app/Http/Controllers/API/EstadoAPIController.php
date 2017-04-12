<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateEstadoAPIRequest;
use App\Http\Requests\API\UpdateEstadoAPIRequest;
use App\Models\Estado;
use App\Repositories\EstadoRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class EstadoController
 * @package App\Http\Controllers\API
 */

class EstadoAPIController extends AppBaseController
{
    /** @var  EstadoRepository */
    private $estadoRepository;

    function __construct(EstadoRepository $estadoRepo)
    {
        $this->estadoRepository = $estadoRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/estados",
     *      summary="Get a listing of the Estados.",
     *      tags={"Estado"},
     *      description="Get all Estados",
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
     *                  @SWG\Items(ref="#/definitions/Estado")
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
        $this->estadoRepository->pushCriteria(new RequestCriteria($request));
        $this->estadoRepository->pushCriteria(new LimitOffsetCriteria($request));
        $estados = $this->estadoRepository->all();

        return $this->sendResponse($estados->toArray(), "Estados retrieved successfully");
    }

    /**
     * @param CreateEstadoAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/estados",
     *      summary="Store a newly created Estado in storage",
     *      tags={"Estado"},
     *      description="Store Estado",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Estado that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Estado")
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
     *                  ref="#/definitions/Estado"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateEstadoAPIRequest $request)
    {
        $input = $request->all();

        $estados = $this->estadoRepository->create($input);

        return $this->sendResponse($estados->toArray(), "Estado saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/estados/{id}",
     *      summary="Display the specified Estado",
     *      tags={"Estado"},
     *      description="Get Estado",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Estado",
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
     *                  ref="#/definitions/Estado"
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
        /** @var Estado $estado */
        $estado = $this->estadoRepository->find($id);

        if(empty($estado)) {
            return Response::json(ResponseUtil::makeError("Estado not found"), 400);
        }

        return $this->sendResponse($estado->toArray(), "Estado retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateEstadoAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/estados/{id}",
     *      summary="Update the specified Estado in storage",
     *      tags={"Estado"},
     *      description="Update Estado",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Estado",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Estado that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Estado")
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
     *                  ref="#/definitions/Estado"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateEstadoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Estado $estado */
        $estado = $this->estadoRepository->find($id);

        if (empty($estado)) {
            return Response::json(ResponseUtil::makeError("Estado not found"), 400);
        }

        $estado = $this->estadoRepository->update($input, $id);

        return $this->sendResponse($estado->toArray(), "Estado updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/estados/{id}",
     *      summary="Remove the specified Estado from storage",
     *      tags={"Estado"},
     *      description="Delete Estado",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Estado",
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
        /** @var Estado $estado */
        $estado = $this->estadoRepository->find($id);

        if(empty($estado)) {
            return Response::json(ResponseUtil::makeError("Estado not found"), 400);
        }

        $estado->delete();

        return $this->sendResponse($id, "Estado deleted successfully");
    }
}
