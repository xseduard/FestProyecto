<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateUniversidadesAPIRequest;
use App\Http\Requests\API\UpdateUniversidadesAPIRequest;
use App\Models\Universidades;
use App\Repositories\UniversidadesRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class UniversidadesController
 * @package App\Http\Controllers\API
 */

class UniversidadesAPIController extends AppBaseController
{
    /** @var  UniversidadesRepository */
    private $universidadesRepository;

    function __construct(UniversidadesRepository $universidadesRepo)
    {
        $this->universidadesRepository = $universidadesRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/universidades",
     *      summary="Get a listing of the Universidades.",
     *      tags={"Universidades"},
     *      description="Get all Universidades",
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
     *                  @SWG\Items(ref="#/definitions/Universidades")
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
        $this->universidadesRepository->pushCriteria(new RequestCriteria($request));
        $this->universidadesRepository->pushCriteria(new LimitOffsetCriteria($request));
        $universidades = $this->universidadesRepository->all();

        return $this->sendResponse($universidades->toArray(), "Universidades retrieved successfully");
    }

    /**
     * @param CreateUniversidadesAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/universidades",
     *      summary="Store a newly created Universidades in storage",
     *      tags={"Universidades"},
     *      description="Store Universidades",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Universidades that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Universidades")
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
     *                  ref="#/definitions/Universidades"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateUniversidadesAPIRequest $request)
    {
        $input = $request->all();

        $universidades = $this->universidadesRepository->create($input);

        return $this->sendResponse($universidades->toArray(), "Universidades saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/universidades/{id}",
     *      summary="Display the specified Universidades",
     *      tags={"Universidades"},
     *      description="Get Universidades",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Universidades",
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
     *                  ref="#/definitions/Universidades"
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
        /** @var Universidades $universidades */
        $universidades = $this->universidadesRepository->find($id);

        if(empty($universidades)) {
            return Response::json(ResponseUtil::makeError("Universidades not found"), 400);
        }

        return $this->sendResponse($universidades->toArray(), "Universidades retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateUniversidadesAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/universidades/{id}",
     *      summary="Update the specified Universidades in storage",
     *      tags={"Universidades"},
     *      description="Update Universidades",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Universidades",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Universidades that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Universidades")
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
     *                  ref="#/definitions/Universidades"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateUniversidadesAPIRequest $request)
    {
        $input = $request->all();

        /** @var Universidades $universidades */
        $universidades = $this->universidadesRepository->find($id);

        if (empty($universidades)) {
            return Response::json(ResponseUtil::makeError("Universidades not found"), 400);
        }

        $universidades = $this->universidadesRepository->update($input, $id);

        return $this->sendResponse($universidades->toArray(), "Universidades updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/universidades/{id}",
     *      summary="Remove the specified Universidades from storage",
     *      tags={"Universidades"},
     *      description="Delete Universidades",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Universidades",
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
        /** @var Universidades $universidades */
        $universidades = $this->universidadesRepository->find($id);

        if(empty($universidades)) {
            return Response::json(ResponseUtil::makeError("Universidades not found"), 400);
        }

        $universidades->delete();

        return $this->sendResponse($id, "Universidades deleted successfully");
    }
}
