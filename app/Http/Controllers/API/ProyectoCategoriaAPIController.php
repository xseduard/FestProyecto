<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProyectoCategoriaAPIRequest;
use App\Http\Requests\API\UpdateProyectoCategoriaAPIRequest;
use App\Models\ProyectoCategoria;
use App\Repositories\ProyectoCategoriaRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ProyectoCategoriaController
 * @package App\Http\Controllers\API
 */

class ProyectoCategoriaAPIController extends AppBaseController
{
    /** @var  ProyectoCategoriaRepository */
    private $proyectoCategoriaRepository;

    function __construct(ProyectoCategoriaRepository $proyectoCategoriaRepo)
    {
        $this->proyectoCategoriaRepository = $proyectoCategoriaRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/proyectoCategorias",
     *      summary="Get a listing of the ProyectoCategorias.",
     *      tags={"ProyectoCategoria"},
     *      description="Get all ProyectoCategorias",
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
     *                  @SWG\Items(ref="#/definitions/ProyectoCategoria")
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
        $this->proyectoCategoriaRepository->pushCriteria(new RequestCriteria($request));
        $this->proyectoCategoriaRepository->pushCriteria(new LimitOffsetCriteria($request));
        $proyectoCategorias = $this->proyectoCategoriaRepository->all();

        return $this->sendResponse($proyectoCategorias->toArray(), "ProyectoCategorias retrieved successfully");
    }

    /**
     * @param CreateProyectoCategoriaAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/proyectoCategorias",
     *      summary="Store a newly created ProyectoCategoria in storage",
     *      tags={"ProyectoCategoria"},
     *      description="Store ProyectoCategoria",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="ProyectoCategoria that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/ProyectoCategoria")
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
     *                  ref="#/definitions/ProyectoCategoria"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateProyectoCategoriaAPIRequest $request)
    {
        $input = $request->all();

        $proyectoCategorias = $this->proyectoCategoriaRepository->create($input);

        return $this->sendResponse($proyectoCategorias->toArray(), "ProyectoCategoria saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/proyectoCategorias/{id}",
     *      summary="Display the specified ProyectoCategoria",
     *      tags={"ProyectoCategoria"},
     *      description="Get ProyectoCategoria",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ProyectoCategoria",
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
     *                  ref="#/definitions/ProyectoCategoria"
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
        /** @var ProyectoCategoria $proyectoCategoria */
        $proyectoCategoria = $this->proyectoCategoriaRepository->find($id);

        if(empty($proyectoCategoria)) {
            return Response::json(ResponseUtil::makeError("ProyectoCategoria not found"), 400);
        }

        return $this->sendResponse($proyectoCategoria->toArray(), "ProyectoCategoria retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateProyectoCategoriaAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/proyectoCategorias/{id}",
     *      summary="Update the specified ProyectoCategoria in storage",
     *      tags={"ProyectoCategoria"},
     *      description="Update ProyectoCategoria",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ProyectoCategoria",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="ProyectoCategoria that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/ProyectoCategoria")
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
     *                  ref="#/definitions/ProyectoCategoria"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateProyectoCategoriaAPIRequest $request)
    {
        $input = $request->all();

        /** @var ProyectoCategoria $proyectoCategoria */
        $proyectoCategoria = $this->proyectoCategoriaRepository->find($id);

        if (empty($proyectoCategoria)) {
            return Response::json(ResponseUtil::makeError("ProyectoCategoria not found"), 400);
        }

        $proyectoCategoria = $this->proyectoCategoriaRepository->update($input, $id);

        return $this->sendResponse($proyectoCategoria->toArray(), "ProyectoCategoria updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/proyectoCategorias/{id}",
     *      summary="Remove the specified ProyectoCategoria from storage",
     *      tags={"ProyectoCategoria"},
     *      description="Delete ProyectoCategoria",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ProyectoCategoria",
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
        /** @var ProyectoCategoria $proyectoCategoria */
        $proyectoCategoria = $this->proyectoCategoriaRepository->find($id);

        if(empty($proyectoCategoria)) {
            return Response::json(ResponseUtil::makeError("ProyectoCategoria not found"), 400);
        }

        $proyectoCategoria->delete();

        return $this->sendResponse($id, "ProyectoCategoria deleted successfully");
    }
}
