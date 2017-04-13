<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProyectoAPIRequest;
use App\Http\Requests\API\UpdateProyectoAPIRequest;
use App\Models\Proyecto;
use App\Repositories\ProyectoRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ProyectoController
 * @package App\Http\Controllers\API
 */

class ProyectoAPIController extends AppBaseController
{
    /** @var  ProyectoRepository */
    private $proyectoRepository;

    function __construct(ProyectoRepository $proyectoRepo)
    {
        $this->proyectoRepository = $proyectoRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/proyectos",
     *      summary="Get a listing of the Proyectos.",
     *      tags={"Proyecto"},
     *      description="Get all Proyectos",
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
     *                  @SWG\Items(ref="#/definitions/Proyecto")
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
        $this->proyectoRepository->pushCriteria(new RequestCriteria($request));
        $this->proyectoRepository->pushCriteria(new LimitOffsetCriteria($request));
        $proyectos = $this->proyectoRepository->all();

        return $this->sendResponse($proyectos->toArray(), "Proyectos retrieved successfully");
    }

    /**
     * @param CreateProyectoAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/proyectos",
     *      summary="Store a newly created Proyecto in storage",
     *      tags={"Proyecto"},
     *      description="Store Proyecto",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Proyecto that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Proyecto")
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
     *                  ref="#/definitions/Proyecto"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateProyectoAPIRequest $request)
    {
        $input = $request->all();

        $proyectos = $this->proyectoRepository->create($input);

        return $this->sendResponse($proyectos->toArray(), "Proyecto saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/proyectos/{id}",
     *      summary="Display the specified Proyecto",
     *      tags={"Proyecto"},
     *      description="Get Proyecto",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Proyecto",
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
     *                  ref="#/definitions/Proyecto"
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
        /** @var Proyecto $proyecto */
        $proyecto = $this->proyectoRepository->find($id);

        if(empty($proyecto)) {
            return Response::json(ResponseUtil::makeError("Proyecto not found"), 400);
        }

        return $this->sendResponse($proyecto->toArray(), "Proyecto retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateProyectoAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/proyectos/{id}",
     *      summary="Update the specified Proyecto in storage",
     *      tags={"Proyecto"},
     *      description="Update Proyecto",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Proyecto",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Proyecto that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Proyecto")
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
     *                  ref="#/definitions/Proyecto"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateProyectoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Proyecto $proyecto */
        $proyecto = $this->proyectoRepository->find($id);

        if (empty($proyecto)) {
            return Response::json(ResponseUtil::makeError("Proyecto not found"), 400);
        }

        $proyecto = $this->proyectoRepository->update($input, $id);

        return $this->sendResponse($proyecto->toArray(), "Proyecto updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/proyectos/{id}",
     *      summary="Remove the specified Proyecto from storage",
     *      tags={"Proyecto"},
     *      description="Delete Proyecto",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Proyecto",
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
        /** @var Proyecto $proyecto */
        $proyecto = $this->proyectoRepository->find($id);

        if(empty($proyecto)) {
            return Response::json(ResponseUtil::makeError("Proyecto not found"), 400);
        }

        $proyecto->delete();

        return $this->sendResponse($id, "Proyecto deleted successfully");
    }
}
