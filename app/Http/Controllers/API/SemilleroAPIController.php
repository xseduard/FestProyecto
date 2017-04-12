<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSemilleroAPIRequest;
use App\Http\Requests\API\UpdateSemilleroAPIRequest;
use App\Models\Semillero;
use App\Repositories\SemilleroRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class SemilleroController
 * @package App\Http\Controllers\API
 */

class SemilleroAPIController extends AppBaseController
{
    /** @var  SemilleroRepository */
    private $semilleroRepository;

    function __construct(SemilleroRepository $semilleroRepo)
    {
        $this->semilleroRepository = $semilleroRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/semilleros",
     *      summary="Get a listing of the Semilleros.",
     *      tags={"Semillero"},
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
     *                  @SWG\Items(ref="#/definitions/Semillero")
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
        $this->semilleroRepository->pushCriteria(new RequestCriteria($request));
        $this->semilleroRepository->pushCriteria(new LimitOffsetCriteria($request));
        $semilleros = $this->semilleroRepository->all();

        return $this->sendResponse($semilleros->toArray(), "Semilleros retrieved successfully");
    }

    /**
     * @param CreateSemilleroAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/semilleros",
     *      summary="Store a newly created Semillero in storage",
     *      tags={"Semillero"},
     *      description="Store Semillero",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Semillero that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Semillero")
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
     *                  ref="#/definitions/Semillero"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateSemilleroAPIRequest $request)
    {
        $input = $request->all();

        $semilleros = $this->semilleroRepository->create($input);

        return $this->sendResponse($semilleros->toArray(), "Semillero saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/semilleros/{id}",
     *      summary="Display the specified Semillero",
     *      tags={"Semillero"},
     *      description="Get Semillero",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Semillero",
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
     *                  ref="#/definitions/Semillero"
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
        /** @var Semillero $semillero */
        $semillero = $this->semilleroRepository->find($id);

        if(empty($semillero)) {
            return Response::json(ResponseUtil::makeError("Semillero not found"), 400);
        }

        return $this->sendResponse($semillero->toArray(), "Semillero retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateSemilleroAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/semilleros/{id}",
     *      summary="Update the specified Semillero in storage",
     *      tags={"Semillero"},
     *      description="Update Semillero",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Semillero",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Semillero that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Semillero")
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
     *                  ref="#/definitions/Semillero"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateSemilleroAPIRequest $request)
    {
        $input = $request->all();

        /** @var Semillero $semillero */
        $semillero = $this->semilleroRepository->find($id);

        if (empty($semillero)) {
            return Response::json(ResponseUtil::makeError("Semillero not found"), 400);
        }

        $semillero = $this->semilleroRepository->update($input, $id);

        return $this->sendResponse($semillero->toArray(), "Semillero updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/semilleros/{id}",
     *      summary="Remove the specified Semillero from storage",
     *      tags={"Semillero"},
     *      description="Delete Semillero",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Semillero",
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
        /** @var Semillero $semillero */
        $semillero = $this->semilleroRepository->find($id);

        if(empty($semillero)) {
            return Response::json(ResponseUtil::makeError("Semillero not found"), 400);
        }

        $semillero->delete();

        return $this->sendResponse($id, "Semillero deleted successfully");
    }
}
