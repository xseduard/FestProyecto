<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateareaAPIRequest;
use App\Http\Requests\API\UpdateareaAPIRequest;
use App\Models\area;
use App\Repositories\areaRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class areaController
 * @package App\Http\Controllers\API
 */

class areaAPIController extends AppBaseController
{
    /** @var  areaRepository */
    private $areaRepository;

    function __construct(areaRepository $areaRepo)
    {
        $this->areaRepository = $areaRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/areas",
     *      summary="Get a listing of the areas.",
     *      tags={"area"},
     *      description="Get all areas",
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
     *                  @SWG\Items(ref="#/definitions/area")
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
        $this->areaRepository->pushCriteria(new RequestCriteria($request));
        $this->areaRepository->pushCriteria(new LimitOffsetCriteria($request));
        $areas = $this->areaRepository->all();

        return $this->sendResponse($areas->toArray(), "areas retrieved successfully");
    }

    /**
     * @param CreateareaAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/areas",
     *      summary="Store a newly created area in storage",
     *      tags={"area"},
     *      description="Store area",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="area that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/area")
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
     *                  ref="#/definitions/area"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateareaAPIRequest $request)
    {
        $input = $request->all();

        $areas = $this->areaRepository->create($input);

        return $this->sendResponse($areas->toArray(), "area saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/areas/{id}",
     *      summary="Display the specified area",
     *      tags={"area"},
     *      description="Get area",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of area",
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
     *                  ref="#/definitions/area"
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
        /** @var area $area */
        $area = $this->areaRepository->find($id);

        if(empty($area)) {
            return Response::json(ResponseUtil::makeError("area not found"), 400);
        }

        return $this->sendResponse($area->toArray(), "area retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateareaAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/areas/{id}",
     *      summary="Update the specified area in storage",
     *      tags={"area"},
     *      description="Update area",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of area",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="area that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/area")
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
     *                  ref="#/definitions/area"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateareaAPIRequest $request)
    {
        $input = $request->all();

        /** @var area $area */
        $area = $this->areaRepository->find($id);

        if (empty($area)) {
            return Response::json(ResponseUtil::makeError("area not found"), 400);
        }

        $area = $this->areaRepository->update($input, $id);

        return $this->sendResponse($area->toArray(), "area updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/areas/{id}",
     *      summary="Remove the specified area from storage",
     *      tags={"area"},
     *      description="Delete area",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of area",
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
        /** @var area $area */
        $area = $this->areaRepository->find($id);

        if(empty($area)) {
            return Response::json(ResponseUtil::makeError("area not found"), 400);
        }

        $area->delete();

        return $this->sendResponse($id, "area deleted successfully");
    }
}
