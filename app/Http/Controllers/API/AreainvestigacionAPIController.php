<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAreainvestigacionAPIRequest;
use App\Http\Requests\API\UpdateAreainvestigacionAPIRequest;
use App\Models\Areainvestigacion;
use App\Repositories\AreainvestigacionRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class AreainvestigacionController
 * @package App\Http\Controllers\API
 */

class AreainvestigacionAPIController extends AppBaseController
{
    /** @var  AreainvestigacionRepository */
    private $areainvestigacionRepository;

    function __construct(AreainvestigacionRepository $areainvestigacionRepo)
    {
        $this->areainvestigacionRepository = $areainvestigacionRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/areainvestigacions",
     *      summary="Get a listing of the Areainvestigacions.",
     *      tags={"Areainvestigacion"},
     *      description="Get all Areainvestigacions",
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
     *                  @SWG\Items(ref="#/definitions/Areainvestigacion")
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
        $this->areainvestigacionRepository->pushCriteria(new RequestCriteria($request));
        $this->areainvestigacionRepository->pushCriteria(new LimitOffsetCriteria($request));
        $areainvestigacions = $this->areainvestigacionRepository->all();

        return $this->sendResponse($areainvestigacions->toArray(), "Areainvestigacions retrieved successfully");
    }

    /**
     * @param CreateAreainvestigacionAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/areainvestigacions",
     *      summary="Store a newly created Areainvestigacion in storage",
     *      tags={"Areainvestigacion"},
     *      description="Store Areainvestigacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Areainvestigacion that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Areainvestigacion")
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
     *                  ref="#/definitions/Areainvestigacion"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateAreainvestigacionAPIRequest $request)
    {
        $input = $request->all();

        $areainvestigacions = $this->areainvestigacionRepository->create($input);

        return $this->sendResponse($areainvestigacions->toArray(), "Areainvestigacion saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/areainvestigacions/{id}",
     *      summary="Display the specified Areainvestigacion",
     *      tags={"Areainvestigacion"},
     *      description="Get Areainvestigacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Areainvestigacion",
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
     *                  ref="#/definitions/Areainvestigacion"
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
        /** @var Areainvestigacion $areainvestigacion */
        $areainvestigacion = $this->areainvestigacionRepository->find($id);

        if(empty($areainvestigacion)) {
            return Response::json(ResponseUtil::makeError("Areainvestigacion not found"), 400);
        }

        return $this->sendResponse($areainvestigacion->toArray(), "Areainvestigacion retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateAreainvestigacionAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/areainvestigacions/{id}",
     *      summary="Update the specified Areainvestigacion in storage",
     *      tags={"Areainvestigacion"},
     *      description="Update Areainvestigacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Areainvestigacion",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Areainvestigacion that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Areainvestigacion")
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
     *                  ref="#/definitions/Areainvestigacion"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateAreainvestigacionAPIRequest $request)
    {
        $input = $request->all();

        /** @var Areainvestigacion $areainvestigacion */
        $areainvestigacion = $this->areainvestigacionRepository->find($id);

        if (empty($areainvestigacion)) {
            return Response::json(ResponseUtil::makeError("Areainvestigacion not found"), 400);
        }

        $areainvestigacion = $this->areainvestigacionRepository->update($input, $id);

        return $this->sendResponse($areainvestigacion->toArray(), "Areainvestigacion updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/areainvestigacions/{id}",
     *      summary="Remove the specified Areainvestigacion from storage",
     *      tags={"Areainvestigacion"},
     *      description="Delete Areainvestigacion",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Areainvestigacion",
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
        /** @var Areainvestigacion $areainvestigacion */
        $areainvestigacion = $this->areainvestigacionRepository->find($id);

        if(empty($areainvestigacion)) {
            return Response::json(ResponseUtil::makeError("Areainvestigacion not found"), 400);
        }

        $areainvestigacion->delete();

        return $this->sendResponse($id, "Areainvestigacion deleted successfully");
    }
}
