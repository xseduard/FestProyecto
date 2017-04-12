<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateLinea_InvestigacionAPIRequest;
use App\Http\Requests\API\UpdateLinea_InvestigacionAPIRequest;
use App\Models\Linea_Investigacion;
use App\Repositories\Linea_InvestigacionRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class Linea_InvestigacionController
 * @package App\Http\Controllers\API
 */

class Linea_InvestigacionAPIController extends AppBaseController
{
    /** @var  Linea_InvestigacionRepository */
    private $lineaInvestigacionRepository;

    function __construct(Linea_InvestigacionRepository $lineaInvestigacionRepo)
    {
        $this->lineaInvestigacionRepository = $lineaInvestigacionRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/lineaInvestigacions",
     *      summary="Get a listing of the Linea_Investigacions.",
     *      tags={"Linea_Investigacion"},
     *      description="Get all Linea_Investigacions",
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
     *                  @SWG\Items(ref="#/definitions/Linea_Investigacion")
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
        $this->lineaInvestigacionRepository->pushCriteria(new RequestCriteria($request));
        $this->lineaInvestigacionRepository->pushCriteria(new LimitOffsetCriteria($request));
        $lineaInvestigacions = $this->lineaInvestigacionRepository->all();

        return $this->sendResponse($lineaInvestigacions->toArray(), "Linea_Investigacions retrieved successfully");
    }

    /**
     * @param CreateLinea_InvestigacionAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/lineaInvestigacions",
     *      summary="Store a newly created Linea_Investigacion in storage",
     *      tags={"Linea_Investigacion"},
     *      description="Store Linea_Investigacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Linea_Investigacion that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Linea_Investigacion")
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
     *                  ref="#/definitions/Linea_Investigacion"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateLinea_InvestigacionAPIRequest $request)
    {
        $input = $request->all();

        $lineaInvestigacions = $this->lineaInvestigacionRepository->create($input);

        return $this->sendResponse($lineaInvestigacions->toArray(), "Linea_Investigacion saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/lineaInvestigacions/{id}",
     *      summary="Display the specified Linea_Investigacion",
     *      tags={"Linea_Investigacion"},
     *      description="Get Linea_Investigacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Linea_Investigacion",
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
     *                  ref="#/definitions/Linea_Investigacion"
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
        /** @var Linea_Investigacion $lineaInvestigacion */
        $lineaInvestigacion = $this->lineaInvestigacionRepository->find($id);

        if(empty($lineaInvestigacion)) {
            return Response::json(ResponseUtil::makeError("Linea_Investigacion not found"), 400);
        }

        return $this->sendResponse($lineaInvestigacion->toArray(), "Linea_Investigacion retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateLinea_InvestigacionAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/lineaInvestigacions/{id}",
     *      summary="Update the specified Linea_Investigacion in storage",
     *      tags={"Linea_Investigacion"},
     *      description="Update Linea_Investigacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Linea_Investigacion",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Linea_Investigacion that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Linea_Investigacion")
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
     *                  ref="#/definitions/Linea_Investigacion"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateLinea_InvestigacionAPIRequest $request)
    {
        $input = $request->all();

        /** @var Linea_Investigacion $lineaInvestigacion */
        $lineaInvestigacion = $this->lineaInvestigacionRepository->find($id);

        if (empty($lineaInvestigacion)) {
            return Response::json(ResponseUtil::makeError("Linea_Investigacion not found"), 400);
        }

        $lineaInvestigacion = $this->lineaInvestigacionRepository->update($input, $id);

        return $this->sendResponse($lineaInvestigacion->toArray(), "Linea_Investigacion updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/lineaInvestigacions/{id}",
     *      summary="Remove the specified Linea_Investigacion from storage",
     *      tags={"Linea_Investigacion"},
     *      description="Delete Linea_Investigacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Linea_Investigacion",
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
        /** @var Linea_Investigacion $lineaInvestigacion */
        $lineaInvestigacion = $this->lineaInvestigacionRepository->find($id);

        if(empty($lineaInvestigacion)) {
            return Response::json(ResponseUtil::makeError("Linea_Investigacion not found"), 400);
        }

        $lineaInvestigacion->delete();

        return $this->sendResponse($id, "Linea_Investigacion deleted successfully");
    }
}
