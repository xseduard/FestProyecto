<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateNodoAPIRequest;
use App\Http\Requests\API\UpdateNodoAPIRequest;
use App\Models\Nodo;
use App\Repositories\NodoRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class NodoController
 * @package App\Http\Controllers\API
 */

class NodoAPIController extends AppBaseController
{
    /** @var  NodoRepository */
    private $nodoRepository;

    function __construct(NodoRepository $nodoRepo)
    {
        $this->nodoRepository = $nodoRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/nodos",
     *      summary="Get a listing of the Nodos.",
     *      tags={"Nodo"},
     *      description="Get all Nodos",
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
     *                  @SWG\Items(ref="#/definitions/Nodo")
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
        $this->nodoRepository->pushCriteria(new RequestCriteria($request));
        $this->nodoRepository->pushCriteria(new LimitOffsetCriteria($request));
        $nodos = $this->nodoRepository->all();

        return $this->sendResponse($nodos->toArray(), "Nodos retrieved successfully");
    }

    /**
     * @param CreateNodoAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/nodos",
     *      summary="Store a newly created Nodo in storage",
     *      tags={"Nodo"},
     *      description="Store Nodo",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Nodo that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Nodo")
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
     *                  ref="#/definitions/Nodo"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateNodoAPIRequest $request)
    {
        $input = $request->all();

        $nodos = $this->nodoRepository->create($input);

        return $this->sendResponse($nodos->toArray(), "Nodo saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/nodos/{id}",
     *      summary="Display the specified Nodo",
     *      tags={"Nodo"},
     *      description="Get Nodo",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Nodo",
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
     *                  ref="#/definitions/Nodo"
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
        /** @var Nodo $nodo */
        $nodo = $this->nodoRepository->find($id);

        if(empty($nodo)) {
            return Response::json(ResponseUtil::makeError("Nodo not found"), 400);
        }

        return $this->sendResponse($nodo->toArray(), "Nodo retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateNodoAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/nodos/{id}",
     *      summary="Update the specified Nodo in storage",
     *      tags={"Nodo"},
     *      description="Update Nodo",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Nodo",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Nodo that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Nodo")
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
     *                  ref="#/definitions/Nodo"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateNodoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Nodo $nodo */
        $nodo = $this->nodoRepository->find($id);

        if (empty($nodo)) {
            return Response::json(ResponseUtil::makeError("Nodo not found"), 400);
        }

        $nodo = $this->nodoRepository->update($input, $id);

        return $this->sendResponse($nodo->toArray(), "Nodo updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/nodos/{id}",
     *      summary="Remove the specified Nodo from storage",
     *      tags={"Nodo"},
     *      description="Delete Nodo",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Nodo",
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
        /** @var Nodo $nodo */
        $nodo = $this->nodoRepository->find($id);

        if(empty($nodo)) {
            return Response::json(ResponseUtil::makeError("Nodo not found"), 400);
        }

        $nodo->delete();

        return $this->sendResponse($id, "Nodo deleted successfully");
    }
}
