<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateEStudiantesAPIRequest;
use App\Http\Requests\API\UpdateEStudiantesAPIRequest;
use App\Models\EStudiantes;
use App\Repositories\EStudiantesRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class EStudiantesController
 * @package App\Http\Controllers\API
 */

class EStudiantesAPIController extends AppBaseController
{
    /** @var  EStudiantesRepository */
    private $eStudiantesRepository;

    function __construct(EStudiantesRepository $eStudiantesRepo)
    {
        $this->eStudiantesRepository = $eStudiantesRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/eStudiantes",
     *      summary="Get a listing of the EStudiantes.",
     *      tags={"EStudiantes"},
     *      description="Get all EStudiantes",
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
     *                  @SWG\Items(ref="#/definitions/EStudiantes")
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
        $this->eStudiantesRepository->pushCriteria(new RequestCriteria($request));
        $this->eStudiantesRepository->pushCriteria(new LimitOffsetCriteria($request));
        $eStudiantes = $this->eStudiantesRepository->all();

        return $this->sendResponse($eStudiantes->toArray(), "EStudiantes retrieved successfully");
    }

    /**
     * @param CreateEStudiantesAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/eStudiantes",
     *      summary="Store a newly created EStudiantes in storage",
     *      tags={"EStudiantes"},
     *      description="Store EStudiantes",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="EStudiantes that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/EStudiantes")
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
     *                  ref="#/definitions/EStudiantes"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateEStudiantesAPIRequest $request)
    {
        $input = $request->all();

        $eStudiantes = $this->eStudiantesRepository->create($input);

        return $this->sendResponse($eStudiantes->toArray(), "EStudiantes saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/eStudiantes/{id}",
     *      summary="Display the specified EStudiantes",
     *      tags={"EStudiantes"},
     *      description="Get EStudiantes",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of EStudiantes",
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
     *                  ref="#/definitions/EStudiantes"
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
        /** @var EStudiantes $eStudiantes */
        $eStudiantes = $this->eStudiantesRepository->find($id);

        if(empty($eStudiantes)) {
            return Response::json(ResponseUtil::makeError("EStudiantes not found"), 400);
        }

        return $this->sendResponse($eStudiantes->toArray(), "EStudiantes retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateEStudiantesAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/eStudiantes/{id}",
     *      summary="Update the specified EStudiantes in storage",
     *      tags={"EStudiantes"},
     *      description="Update EStudiantes",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of EStudiantes",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="EStudiantes that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/EStudiantes")
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
     *                  ref="#/definitions/EStudiantes"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateEStudiantesAPIRequest $request)
    {
        $input = $request->all();

        /** @var EStudiantes $eStudiantes */
        $eStudiantes = $this->eStudiantesRepository->find($id);

        if (empty($eStudiantes)) {
            return Response::json(ResponseUtil::makeError("EStudiantes not found"), 400);
        }

        $eStudiantes = $this->eStudiantesRepository->update($input, $id);

        return $this->sendResponse($eStudiantes->toArray(), "EStudiantes updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/eStudiantes/{id}",
     *      summary="Remove the specified EStudiantes from storage",
     *      tags={"EStudiantes"},
     *      description="Delete EStudiantes",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of EStudiantes",
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
        /** @var EStudiantes $eStudiantes */
        $eStudiantes = $this->eStudiantesRepository->find($id);

        if(empty($eStudiantes)) {
            return Response::json(ResponseUtil::makeError("EStudiantes not found"), 400);
        }

        $eStudiantes->delete();

        return $this->sendResponse($id, "EStudiantes deleted successfully");
    }
}
