<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateGrupo_InvestigacionAPIRequest;
use App\Http\Requests\API\UpdateGrupo_InvestigacionAPIRequest;
use App\Models\Grupo_Investigacion;
use App\Repositories\Grupo_InvestigacionRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class Grupo_InvestigacionController
 * @package App\Http\Controllers\API
 */

class Grupo_InvestigacionAPIController extends AppBaseController
{
    /** @var  Grupo_InvestigacionRepository */
    private $grupoInvestigacionRepository;

    function __construct(Grupo_InvestigacionRepository $grupoInvestigacionRepo)
    {
        $this->grupoInvestigacionRepository = $grupoInvestigacionRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/grupoInvestigacions",
     *      summary="Get a listing of the Grupo_Investigacions.",
     *      tags={"Grupo_Investigacion"},
     *      description="Get all Grupo_Investigacions",
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
     *                  @SWG\Items(ref="#/definitions/Grupo_Investigacion")
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
        $this->grupoInvestigacionRepository->pushCriteria(new RequestCriteria($request));
        $this->grupoInvestigacionRepository->pushCriteria(new LimitOffsetCriteria($request));
        $grupoInvestigacions = $this->grupoInvestigacionRepository->all();

        return $this->sendResponse($grupoInvestigacions->toArray(), "Grupo_Investigacions retrieved successfully");
    }

    /**
     * @param CreateGrupo_InvestigacionAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/grupoInvestigacions",
     *      summary="Store a newly created Grupo_Investigacion in storage",
     *      tags={"Grupo_Investigacion"},
     *      description="Store Grupo_Investigacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Grupo_Investigacion that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Grupo_Investigacion")
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
     *                  ref="#/definitions/Grupo_Investigacion"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateGrupo_InvestigacionAPIRequest $request)
    {
        $input = $request->all();

        $grupoInvestigacions = $this->grupoInvestigacionRepository->create($input);

        return $this->sendResponse($grupoInvestigacions->toArray(), "Grupo_Investigacion saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/grupoInvestigacions/{id}",
     *      summary="Display the specified Grupo_Investigacion",
     *      tags={"Grupo_Investigacion"},
     *      description="Get Grupo_Investigacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Grupo_Investigacion",
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
     *                  ref="#/definitions/Grupo_Investigacion"
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
        /** @var Grupo_Investigacion $grupoInvestigacion */
        $grupoInvestigacion = $this->grupoInvestigacionRepository->find($id);

        if(empty($grupoInvestigacion)) {
            return Response::json(ResponseUtil::makeError("Grupo_Investigacion not found"), 400);
        }

        return $this->sendResponse($grupoInvestigacion->toArray(), "Grupo_Investigacion retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateGrupo_InvestigacionAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/grupoInvestigacions/{id}",
     *      summary="Update the specified Grupo_Investigacion in storage",
     *      tags={"Grupo_Investigacion"},
     *      description="Update Grupo_Investigacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Grupo_Investigacion",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Grupo_Investigacion that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Grupo_Investigacion")
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
     *                  ref="#/definitions/Grupo_Investigacion"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateGrupo_InvestigacionAPIRequest $request)
    {
        $input = $request->all();

        /** @var Grupo_Investigacion $grupoInvestigacion */
        $grupoInvestigacion = $this->grupoInvestigacionRepository->find($id);

        if (empty($grupoInvestigacion)) {
            return Response::json(ResponseUtil::makeError("Grupo_Investigacion not found"), 400);
        }

        $grupoInvestigacion = $this->grupoInvestigacionRepository->update($input, $id);

        return $this->sendResponse($grupoInvestigacion->toArray(), "Grupo_Investigacion updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/grupoInvestigacions/{id}",
     *      summary="Remove the specified Grupo_Investigacion from storage",
     *      tags={"Grupo_Investigacion"},
     *      description="Delete Grupo_Investigacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Grupo_Investigacion",
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
        /** @var Grupo_Investigacion $grupoInvestigacion */
        $grupoInvestigacion = $this->grupoInvestigacionRepository->find($id);

        if(empty($grupoInvestigacion)) {
            return Response::json(ResponseUtil::makeError("Grupo_Investigacion not found"), 400);
        }

        $grupoInvestigacion->delete();

        return $this->sendResponse($id, "Grupo_Investigacion deleted successfully");
    }
}
