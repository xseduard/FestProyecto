<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProyectoInvestigacionAPIRequest;
use App\Http\Requests\API\UpdateProyectoInvestigacionAPIRequest;
use App\Models\ProyectoInvestigacion;
use App\Repositories\ProyectoInvestigacionRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ProyectoInvestigacionController
 * @package App\Http\Controllers\API
 */

class ProyectoInvestigacionAPIController extends AppBaseController
{
    /** @var  ProyectoInvestigacionRepository */
    private $proyectoInvestigacionRepository;

    function __construct(ProyectoInvestigacionRepository $proyectoInvestigacionRepo)
    {
        $this->proyectoInvestigacionRepository = $proyectoInvestigacionRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/proyectoInvestigacions",
     *      summary="Get a listing of the ProyectoInvestigacions.",
     *      tags={"ProyectoInvestigacion"},
     *      description="Get all ProyectoInvestigacions",
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
     *                  @SWG\Items(ref="#/definitions/ProyectoInvestigacion")
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
        $this->proyectoInvestigacionRepository->pushCriteria(new RequestCriteria($request));
        $this->proyectoInvestigacionRepository->pushCriteria(new LimitOffsetCriteria($request));
        $proyectoInvestigacions = $this->proyectoInvestigacionRepository->all();

        return $this->sendResponse($proyectoInvestigacions->toArray(), "ProyectoInvestigacions retrieved successfully");
    }

    /**
     * @param CreateProyectoInvestigacionAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/proyectoInvestigacions",
     *      summary="Store a newly created ProyectoInvestigacion in storage",
     *      tags={"ProyectoInvestigacion"},
     *      description="Store ProyectoInvestigacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="ProyectoInvestigacion that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/ProyectoInvestigacion")
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
     *                  ref="#/definitions/ProyectoInvestigacion"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateProyectoInvestigacionAPIRequest $request)
    {
        $input = $request->all();

        $proyectoInvestigacions = $this->proyectoInvestigacionRepository->create($input);

        return $this->sendResponse($proyectoInvestigacions->toArray(), "ProyectoInvestigacion saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/proyectoInvestigacions/{id}",
     *      summary="Display the specified ProyectoInvestigacion",
     *      tags={"ProyectoInvestigacion"},
     *      description="Get ProyectoInvestigacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ProyectoInvestigacion",
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
     *                  ref="#/definitions/ProyectoInvestigacion"
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
        /** @var ProyectoInvestigacion $proyectoInvestigacion */
        $proyectoInvestigacion = $this->proyectoInvestigacionRepository->find($id);

        if(empty($proyectoInvestigacion)) {
            return Response::json(ResponseUtil::makeError("ProyectoInvestigacion not found"), 400);
        }

        return $this->sendResponse($proyectoInvestigacion->toArray(), "ProyectoInvestigacion retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateProyectoInvestigacionAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/proyectoInvestigacions/{id}",
     *      summary="Update the specified ProyectoInvestigacion in storage",
     *      tags={"ProyectoInvestigacion"},
     *      description="Update ProyectoInvestigacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ProyectoInvestigacion",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="ProyectoInvestigacion that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/ProyectoInvestigacion")
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
     *                  ref="#/definitions/ProyectoInvestigacion"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateProyectoInvestigacionAPIRequest $request)
    {
        $input = $request->all();

        /** @var ProyectoInvestigacion $proyectoInvestigacion */
        $proyectoInvestigacion = $this->proyectoInvestigacionRepository->find($id);

        if (empty($proyectoInvestigacion)) {
            return Response::json(ResponseUtil::makeError("ProyectoInvestigacion not found"), 400);
        }

        $proyectoInvestigacion = $this->proyectoInvestigacionRepository->update($input, $id);

        return $this->sendResponse($proyectoInvestigacion->toArray(), "ProyectoInvestigacion updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/proyectoInvestigacions/{id}",
     *      summary="Remove the specified ProyectoInvestigacion from storage",
     *      tags={"ProyectoInvestigacion"},
     *      description="Delete ProyectoInvestigacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ProyectoInvestigacion",
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
        /** @var ProyectoInvestigacion $proyectoInvestigacion */
        $proyectoInvestigacion = $this->proyectoInvestigacionRepository->find($id);

        if(empty($proyectoInvestigacion)) {
            return Response::json(ResponseUtil::makeError("ProyectoInvestigacion not found"), 400);
        }

        $proyectoInvestigacion->delete();

        return $this->sendResponse($id, "ProyectoInvestigacion deleted successfully");
    }
}
