<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRegionalAPIRequest;
use App\Http\Requests\API\UpdateRegionalAPIRequest;
use App\Models\Regional;
use App\Repositories\RegionalRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class RegionalController
 * @package App\Http\Controllers\API
 */

class RegionalAPIController extends AppBaseController
{
    /** @var  RegionalRepository */
    private $regionalRepository;

    function __construct(RegionalRepository $regionalRepo)
    {
        $this->regionalRepository = $regionalRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/regionals",
     *      summary="Get a listing of the Regionals.",
     *      tags={"Regional"},
     *      description="Get all Regionals",
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
     *                  @SWG\Items(ref="#/definitions/Regional")
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
        $this->regionalRepository->pushCriteria(new RequestCriteria($request));
        $this->regionalRepository->pushCriteria(new LimitOffsetCriteria($request));
        $regionals = $this->regionalRepository->all();

        return $this->sendResponse($regionals->toArray(), "Regionals retrieved successfully");
    }

    /**
     * @param CreateRegionalAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/regionals",
     *      summary="Store a newly created Regional in storage",
     *      tags={"Regional"},
     *      description="Store Regional",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Regional that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Regional")
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
     *                  ref="#/definitions/Regional"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateRegionalAPIRequest $request)
    {
        $input = $request->all();

        $regionals = $this->regionalRepository->create($input);

        return $this->sendResponse($regionals->toArray(), "Regional saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/regionals/{id}",
     *      summary="Display the specified Regional",
     *      tags={"Regional"},
     *      description="Get Regional",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Regional",
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
     *                  ref="#/definitions/Regional"
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
        /** @var Regional $regional */
        $regional = $this->regionalRepository->find($id);

        if(empty($regional)) {
            return Response::json(ResponseUtil::makeError("Regional not found"), 400);
        }

        return $this->sendResponse($regional->toArray(), "Regional retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateRegionalAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/regionals/{id}",
     *      summary="Update the specified Regional in storage",
     *      tags={"Regional"},
     *      description="Update Regional",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Regional",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Regional that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Regional")
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
     *                  ref="#/definitions/Regional"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateRegionalAPIRequest $request)
    {
        $input = $request->all();

        /** @var Regional $regional */
        $regional = $this->regionalRepository->find($id);

        if (empty($regional)) {
            return Response::json(ResponseUtil::makeError("Regional not found"), 400);
        }

        $regional = $this->regionalRepository->update($input, $id);

        return $this->sendResponse($regional->toArray(), "Regional updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/regionals/{id}",
     *      summary="Remove the specified Regional from storage",
     *      tags={"Regional"},
     *      description="Delete Regional",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Regional",
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
        /** @var Regional $regional */
        $regional = $this->regionalRepository->find($id);

        if(empty($regional)) {
            return Response::json(ResponseUtil::makeError("Regional not found"), 400);
        }

        $regional->delete();

        return $this->sendResponse($id, "Regional deleted successfully");
    }
}
