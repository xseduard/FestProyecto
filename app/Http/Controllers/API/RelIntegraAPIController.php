<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRelIntegraAPIRequest;
use App\Http\Requests\API\UpdateRelIntegraAPIRequest;
use App\Models\RelIntegra;
use App\Repositories\RelIntegraRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class RelIntegraController
 * @package App\Http\Controllers\API
 */

class RelIntegraAPIController extends AppBaseController
{
    /** @var  RelIntegraRepository */
    private $relIntegraRepository;

    function __construct(RelIntegraRepository $relIntegraRepo)
    {
        $this->relIntegraRepository = $relIntegraRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/relIntegras",
     *      summary="Get a listing of the RelIntegras.",
     *      tags={"RelIntegra"},
     *      description="Get all RelIntegras",
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
     *                  @SWG\Items(ref="#/definitions/RelIntegra")
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
        $this->relIntegraRepository->pushCriteria(new RequestCriteria($request));
        $this->relIntegraRepository->pushCriteria(new LimitOffsetCriteria($request));
        $relIntegras = $this->relIntegraRepository->all();

        return $this->sendResponse($relIntegras->toArray(), "RelIntegras retrieved successfully");
    }

    /**
     * @param CreateRelIntegraAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/relIntegras",
     *      summary="Store a newly created RelIntegra in storage",
     *      tags={"RelIntegra"},
     *      description="Store RelIntegra",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="RelIntegra that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/RelIntegra")
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
     *                  ref="#/definitions/RelIntegra"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateRelIntegraAPIRequest $request)
    {
        $input = $request->all();

        $relIntegras = $this->relIntegraRepository->create($input);

        return $this->sendResponse($relIntegras->toArray(), "RelIntegra saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/relIntegras/{id}",
     *      summary="Display the specified RelIntegra",
     *      tags={"RelIntegra"},
     *      description="Get RelIntegra",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of RelIntegra",
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
     *                  ref="#/definitions/RelIntegra"
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
        /** @var RelIntegra $relIntegra */
        $relIntegra = $this->relIntegraRepository->find($id);

        if(empty($relIntegra)) {
            return Response::json(ResponseUtil::makeError("RelIntegra not found"), 400);
        }

        return $this->sendResponse($relIntegra->toArray(), "RelIntegra retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateRelIntegraAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/relIntegras/{id}",
     *      summary="Update the specified RelIntegra in storage",
     *      tags={"RelIntegra"},
     *      description="Update RelIntegra",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of RelIntegra",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="RelIntegra that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/RelIntegra")
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
     *                  ref="#/definitions/RelIntegra"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateRelIntegraAPIRequest $request)
    {
        $input = $request->all();

        /** @var RelIntegra $relIntegra */
        $relIntegra = $this->relIntegraRepository->find($id);

        if (empty($relIntegra)) {
            return Response::json(ResponseUtil::makeError("RelIntegra not found"), 400);
        }

        $relIntegra = $this->relIntegraRepository->update($input, $id);

        return $this->sendResponse($relIntegra->toArray(), "RelIntegra updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/relIntegras/{id}",
     *      summary="Remove the specified RelIntegra from storage",
     *      tags={"RelIntegra"},
     *      description="Delete RelIntegra",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of RelIntegra",
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
        /** @var RelIntegra $relIntegra */
        $relIntegra = $this->relIntegraRepository->find($id);

        if(empty($relIntegra)) {
            return Response::json(ResponseUtil::makeError("RelIntegra not found"), 400);
        }

        $relIntegra->delete();

        return $this->sendResponse($id, "RelIntegra deleted successfully");
    }
}
