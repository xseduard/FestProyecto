<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatedepartamentoAPIRequest;
use App\Http\Requests\API\UpdatedepartamentoAPIRequest;
use App\Models\departamento;
use App\Repositories\departamentoRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class departamentoController
 * @package App\Http\Controllers\API
 */

class departamentoAPIController extends AppBaseController
{
    /** @var  departamentoRepository */
    private $departamentoRepository;

    function __construct(departamentoRepository $departamentoRepo)
    {
        $this->departamentoRepository = $departamentoRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/departamentos",
     *      summary="Get a listing of the departamentos.",
     *      tags={"departamento"},
     *      description="Get all departamentos",
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
     *                  @SWG\Items(ref="#/definitions/departamento")
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
        $this->departamentoRepository->pushCriteria(new RequestCriteria($request));
        $this->departamentoRepository->pushCriteria(new LimitOffsetCriteria($request));
        $departamentos = $this->departamentoRepository->all();

        return $this->sendResponse($departamentos->toArray(), "departamentos retrieved successfully");
    }

    /**
     * @param CreatedepartamentoAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/departamentos",
     *      summary="Store a newly created departamento in storage",
     *      tags={"departamento"},
     *      description="Store departamento",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="departamento that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/departamento")
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
     *                  ref="#/definitions/departamento"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreatedepartamentoAPIRequest $request)
    {
        $input = $request->all();

        $departamentos = $this->departamentoRepository->create($input);

        return $this->sendResponse($departamentos->toArray(), "departamento saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/departamentos/{id}",
     *      summary="Display the specified departamento",
     *      tags={"departamento"},
     *      description="Get departamento",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of departamento",
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
     *                  ref="#/definitions/departamento"
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
        /** @var departamento $departamento */
        $departamento = $this->departamentoRepository->find($id);

        if(empty($departamento)) {
            return Response::json(ResponseUtil::makeError("departamento not found"), 400);
        }

        return $this->sendResponse($departamento->toArray(), "departamento retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdatedepartamentoAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/departamentos/{id}",
     *      summary="Update the specified departamento in storage",
     *      tags={"departamento"},
     *      description="Update departamento",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of departamento",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="departamento that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/departamento")
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
     *                  ref="#/definitions/departamento"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdatedepartamentoAPIRequest $request)
    {
        $input = $request->all();

        /** @var departamento $departamento */
        $departamento = $this->departamentoRepository->find($id);

        if (empty($departamento)) {
            return Response::json(ResponseUtil::makeError("departamento not found"), 400);
        }

        $departamento = $this->departamentoRepository->update($input, $id);

        return $this->sendResponse($departamento->toArray(), "departamento updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/departamentos/{id}",
     *      summary="Remove the specified departamento from storage",
     *      tags={"departamento"},
     *      description="Delete departamento",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of departamento",
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
        /** @var departamento $departamento */
        $departamento = $this->departamentoRepository->find($id);

        if(empty($departamento)) {
            return Response::json(ResponseUtil::makeError("departamento not found"), 400);
        }

        $departamento->delete();

        return $this->sendResponse($id, "departamento deleted successfully");
    }
}
