<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSemillerosAPIRequest;
use App\Http\Requests\API\UpdateSemillerosAPIRequest;
use App\Models\Semilleros;
use App\Repositories\SemillerosRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class SemillerosController
 * @package App\Http\Controllers\API
 */

class SemillerosAPIController extends AppBaseController
{
    /** @var  SemillerosRepository */
    private $semillerosRepository;

    function __construct(SemillerosRepository $semillerosRepo)
    {
        $this->semillerosRepository = $semillerosRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/semilleros",
     *      summary="Get a listing of the Semilleros.",
     *      tags={"Semilleros"},
     *      description="Get all Semilleros",
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
     *                  @SWG\Items(ref="#/definitions/Semilleros")
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
        $this->semillerosRepository->pushCriteria(new RequestCriteria($request));
        $this->semillerosRepository->pushCriteria(new LimitOffsetCriteria($request));
        $semilleros = $this->semillerosRepository->all();

        return $this->sendResponse($semilleros->toArray(), "Semilleros retrieved successfully");
    }

    /**
     * @param CreateSemillerosAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/semilleros",
     *      summary="Store a newly created Semilleros in storage",
     *      tags={"Semilleros"},
     *      description="Store Semilleros",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Semilleros that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Semilleros")
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
     *                  ref="#/definitions/Semilleros"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateSemillerosAPIRequest $request)
    {
        $input = $request->all();

        $semilleros = $this->semillerosRepository->create($input);

        return $this->sendResponse($semilleros->toArray(), "Semilleros saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/semilleros/{id}",
     *      summary="Display the specified Semilleros",
     *      tags={"Semilleros"},
     *      description="Get Semilleros",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Semilleros",
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
     *                  ref="#/definitions/Semilleros"
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
        /** @var Semilleros $semilleros */
        $semilleros = $this->semillerosRepository->find($id);

        if(empty($semilleros)) {
            return Response::json(ResponseUtil::makeError("Semilleros not found"), 400);
        }

        return $this->sendResponse($semilleros->toArray(), "Semilleros retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateSemillerosAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/semilleros/{id}",
     *      summary="Update the specified Semilleros in storage",
     *      tags={"Semilleros"},
     *      description="Update Semilleros",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Semilleros",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Semilleros that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Semilleros")
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
     *                  ref="#/definitions/Semilleros"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateSemillerosAPIRequest $request)
    {
        $input = $request->all();

        /** @var Semilleros $semilleros */
        $semilleros = $this->semillerosRepository->find($id);

        if (empty($semilleros)) {
            return Response::json(ResponseUtil::makeError("Semilleros not found"), 400);
        }

        $semilleros = $this->semillerosRepository->update($input, $id);

        return $this->sendResponse($semilleros->toArray(), "Semilleros updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/semilleros/{id}",
     *      summary="Remove the specified Semilleros from storage",
     *      tags={"Semilleros"},
     *      description="Delete Semilleros",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Semilleros",
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
        /** @var Semilleros $semilleros */
        $semilleros = $this->semillerosRepository->find($id);

        if(empty($semilleros)) {
            return Response::json(ResponseUtil::makeError("Semilleros not found"), 400);
        }

        $semilleros->delete();

        return $this->sendResponse($id, "Semilleros deleted successfully");
    }
}
