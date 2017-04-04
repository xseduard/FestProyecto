<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAsignaturasAPIRequest;
use App\Http\Requests\API\UpdateAsignaturasAPIRequest;
use App\Models\Asignaturas;
use App\Repositories\AsignaturasRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class AsignaturasController
 * @package App\Http\Controllers\API
 */

class AsignaturasAPIController extends AppBaseController
{
    /** @var  AsignaturasRepository */
    private $asignaturasRepository;

    function __construct(AsignaturasRepository $asignaturasRepo)
    {
        $this->asignaturasRepository = $asignaturasRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/asignaturas",
     *      summary="Get a listing of the Asignaturas.",
     *      tags={"Asignaturas"},
     *      description="Get all Asignaturas",
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
     *                  @SWG\Items(ref="#/definitions/Asignaturas")
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
        $this->asignaturasRepository->pushCriteria(new RequestCriteria($request));
        $this->asignaturasRepository->pushCriteria(new LimitOffsetCriteria($request));
        $asignaturas = $this->asignaturasRepository->all();

        return $this->sendResponse($asignaturas->toArray(), "Asignaturas retrieved successfully");
    }

    /**
     * @param CreateAsignaturasAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/asignaturas",
     *      summary="Store a newly created Asignaturas in storage",
     *      tags={"Asignaturas"},
     *      description="Store Asignaturas",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Asignaturas that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Asignaturas")
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
     *                  ref="#/definitions/Asignaturas"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateAsignaturasAPIRequest $request)
    {
        $input = $request->all();

        $asignaturas = $this->asignaturasRepository->create($input);

        return $this->sendResponse($asignaturas->toArray(), "Asignaturas saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/asignaturas/{id}",
     *      summary="Display the specified Asignaturas",
     *      tags={"Asignaturas"},
     *      description="Get Asignaturas",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Asignaturas",
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
     *                  ref="#/definitions/Asignaturas"
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
        /** @var Asignaturas $asignaturas */
        $asignaturas = $this->asignaturasRepository->find($id);

        if(empty($asignaturas)) {
            return Response::json(ResponseUtil::makeError("Asignaturas not found"), 400);
        }

        return $this->sendResponse($asignaturas->toArray(), "Asignaturas retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateAsignaturasAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/asignaturas/{id}",
     *      summary="Update the specified Asignaturas in storage",
     *      tags={"Asignaturas"},
     *      description="Update Asignaturas",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Asignaturas",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Asignaturas that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Asignaturas")
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
     *                  ref="#/definitions/Asignaturas"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateAsignaturasAPIRequest $request)
    {
        $input = $request->all();

        /** @var Asignaturas $asignaturas */
        $asignaturas = $this->asignaturasRepository->find($id);

        if (empty($asignaturas)) {
            return Response::json(ResponseUtil::makeError("Asignaturas not found"), 400);
        }

        $asignaturas = $this->asignaturasRepository->update($input, $id);

        return $this->sendResponse($asignaturas->toArray(), "Asignaturas updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/asignaturas/{id}",
     *      summary="Remove the specified Asignaturas from storage",
     *      tags={"Asignaturas"},
     *      description="Delete Asignaturas",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Asignaturas",
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
        /** @var Asignaturas $asignaturas */
        $asignaturas = $this->asignaturasRepository->find($id);

        if(empty($asignaturas)) {
            return Response::json(ResponseUtil::makeError("Asignaturas not found"), 400);
        }

        $asignaturas->delete();

        return $this->sendResponse($id, "Asignaturas deleted successfully");
    }
}
