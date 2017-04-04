<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSubareaAPIRequest;
use App\Http\Requests\API\UpdateSubareaAPIRequest;
use App\Models\Subarea;
use App\Repositories\SubareaRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class SubareaController
 * @package App\Http\Controllers\API
 */

class SubareaAPIController extends AppBaseController
{
    /** @var  SubareaRepository */
    private $subareaRepository;

    function __construct(SubareaRepository $subareaRepo)
    {
        $this->subareaRepository = $subareaRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/subareas",
     *      summary="Get a listing of the Subareas.",
     *      tags={"Subarea"},
     *      description="Get all Subareas",
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
     *                  @SWG\Items(ref="#/definitions/Subarea")
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
        $this->subareaRepository->pushCriteria(new RequestCriteria($request));
        $this->subareaRepository->pushCriteria(new LimitOffsetCriteria($request));
        $subareas = $this->subareaRepository->all();

        return $this->sendResponse($subareas->toArray(), "Subareas retrieved successfully");
    }

    /**
     * @param CreateSubareaAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/subareas",
     *      summary="Store a newly created Subarea in storage",
     *      tags={"Subarea"},
     *      description="Store Subarea",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Subarea that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Subarea")
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
     *                  ref="#/definitions/Subarea"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateSubareaAPIRequest $request)
    {
        $input = $request->all();

        $subareas = $this->subareaRepository->create($input);

        return $this->sendResponse($subareas->toArray(), "Subarea saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/subareas/{id}",
     *      summary="Display the specified Subarea",
     *      tags={"Subarea"},
     *      description="Get Subarea",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Subarea",
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
     *                  ref="#/definitions/Subarea"
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
        /** @var Subarea $subarea */
        $subarea = $this->subareaRepository->find($id);

        if(empty($subarea)) {
            return Response::json(ResponseUtil::makeError("Subarea not found"), 400);
        }

        return $this->sendResponse($subarea->toArray(), "Subarea retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateSubareaAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/subareas/{id}",
     *      summary="Update the specified Subarea in storage",
     *      tags={"Subarea"},
     *      description="Update Subarea",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Subarea",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Subarea that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Subarea")
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
     *                  ref="#/definitions/Subarea"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateSubareaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Subarea $subarea */
        $subarea = $this->subareaRepository->find($id);

        if (empty($subarea)) {
            return Response::json(ResponseUtil::makeError("Subarea not found"), 400);
        }

        $subarea = $this->subareaRepository->update($input, $id);

        return $this->sendResponse($subarea->toArray(), "Subarea updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/subareas/{id}",
     *      summary="Remove the specified Subarea from storage",
     *      tags={"Subarea"},
     *      description="Delete Subarea",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Subarea",
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
        /** @var Subarea $subarea */
        $subarea = $this->subareaRepository->find($id);

        if(empty($subarea)) {
            return Response::json(ResponseUtil::makeError("Subarea not found"), 400);
        }

        $subarea->delete();

        return $this->sendResponse($id, "Subarea deleted successfully");
    }
}
