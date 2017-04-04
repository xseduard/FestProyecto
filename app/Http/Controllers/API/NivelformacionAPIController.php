<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateNivelformacionAPIRequest;
use App\Http\Requests\API\UpdateNivelformacionAPIRequest;
use App\Models\Nivelformacion;
use App\Repositories\NivelformacionRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class NivelformacionController
 * @package App\Http\Controllers\API
 */

class NivelformacionAPIController extends AppBaseController
{
    /** @var  NivelformacionRepository */
    private $nivelformacionRepository;

    function __construct(NivelformacionRepository $nivelformacionRepo)
    {
        $this->nivelformacionRepository = $nivelformacionRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/nivelformacions",
     *      summary="Get a listing of the Nivelformacions.",
     *      tags={"Nivelformacion"},
     *      description="Get all Nivelformacions",
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
     *                  @SWG\Items(ref="#/definitions/Nivelformacion")
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
        $this->nivelformacionRepository->pushCriteria(new RequestCriteria($request));
        $this->nivelformacionRepository->pushCriteria(new LimitOffsetCriteria($request));
        $nivelformacions = $this->nivelformacionRepository->all();

        return $this->sendResponse($nivelformacions->toArray(), "Nivelformacions retrieved successfully");
    }

    /**
     * @param CreateNivelformacionAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/nivelformacions",
     *      summary="Store a newly created Nivelformacion in storage",
     *      tags={"Nivelformacion"},
     *      description="Store Nivelformacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Nivelformacion that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Nivelformacion")
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
     *                  ref="#/definitions/Nivelformacion"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateNivelformacionAPIRequest $request)
    {
        $input = $request->all();

        $nivelformacions = $this->nivelformacionRepository->create($input);

        return $this->sendResponse($nivelformacions->toArray(), "Nivelformacion saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/nivelformacions/{id}",
     *      summary="Display the specified Nivelformacion",
     *      tags={"Nivelformacion"},
     *      description="Get Nivelformacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Nivelformacion",
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
     *                  ref="#/definitions/Nivelformacion"
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
        /** @var Nivelformacion $nivelformacion */
        $nivelformacion = $this->nivelformacionRepository->find($id);

        if(empty($nivelformacion)) {
            return Response::json(ResponseUtil::makeError("Nivelformacion not found"), 400);
        }

        return $this->sendResponse($nivelformacion->toArray(), "Nivelformacion retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateNivelformacionAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/nivelformacions/{id}",
     *      summary="Update the specified Nivelformacion in storage",
     *      tags={"Nivelformacion"},
     *      description="Update Nivelformacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Nivelformacion",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Nivelformacion that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Nivelformacion")
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
     *                  ref="#/definitions/Nivelformacion"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateNivelformacionAPIRequest $request)
    {
        $input = $request->all();

        /** @var Nivelformacion $nivelformacion */
        $nivelformacion = $this->nivelformacionRepository->find($id);

        if (empty($nivelformacion)) {
            return Response::json(ResponseUtil::makeError("Nivelformacion not found"), 400);
        }

        $nivelformacion = $this->nivelformacionRepository->update($input, $id);

        return $this->sendResponse($nivelformacion->toArray(), "Nivelformacion updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/nivelformacions/{id}",
     *      summary="Remove the specified Nivelformacion from storage",
     *      tags={"Nivelformacion"},
     *      description="Delete Nivelformacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Nivelformacion",
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
        /** @var Nivelformacion $nivelformacion */
        $nivelformacion = $this->nivelformacionRepository->find($id);

        if(empty($nivelformacion)) {
            return Response::json(ResponseUtil::makeError("Nivelformacion not found"), 400);
        }

        $nivelformacion->delete();

        return $this->sendResponse($id, "Nivelformacion deleted successfully");
    }
}
