<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateContenidoAPIRequest;
use App\Http\Requests\API\UpdateContenidoAPIRequest;
use App\Models\Contenido;
use App\Repositories\ContenidoRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ContenidoController
 * @package App\Http\Controllers\API
 */

class ContenidoAPIController extends AppBaseController
{
    /** @var  ContenidoRepository */
    private $contenidoRepository;

    function __construct(ContenidoRepository $contenidoRepo)
    {
        $this->contenidoRepository = $contenidoRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/contenidos",
     *      summary="Get a listing of the Contenidos.",
     *      tags={"Contenido"},
     *      description="Get all Contenidos",
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
     *                  @SWG\Items(ref="#/definitions/Contenido")
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
        $this->contenidoRepository->pushCriteria(new RequestCriteria($request));
        $this->contenidoRepository->pushCriteria(new LimitOffsetCriteria($request));
        $contenidos = $this->contenidoRepository->all();

        return $this->sendResponse($contenidos->toArray(), "Contenidos retrieved successfully");
    }

    /**
     * @param CreateContenidoAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/contenidos",
     *      summary="Store a newly created Contenido in storage",
     *      tags={"Contenido"},
     *      description="Store Contenido",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Contenido that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Contenido")
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
     *                  ref="#/definitions/Contenido"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateContenidoAPIRequest $request)
    {
        $input = $request->all();

        $contenidos = $this->contenidoRepository->create($input);

        return $this->sendResponse($contenidos->toArray(), "Contenido saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/contenidos/{id}",
     *      summary="Display the specified Contenido",
     *      tags={"Contenido"},
     *      description="Get Contenido",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Contenido",
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
     *                  ref="#/definitions/Contenido"
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
        /** @var Contenido $contenido */
        $contenido = $this->contenidoRepository->find($id);

        if(empty($contenido)) {
            return Response::json(ResponseUtil::makeError("Contenido not found"), 400);
        }

        return $this->sendResponse($contenido->toArray(), "Contenido retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateContenidoAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/contenidos/{id}",
     *      summary="Update the specified Contenido in storage",
     *      tags={"Contenido"},
     *      description="Update Contenido",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Contenido",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Contenido that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Contenido")
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
     *                  ref="#/definitions/Contenido"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateContenidoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Contenido $contenido */
        $contenido = $this->contenidoRepository->find($id);

        if (empty($contenido)) {
            return Response::json(ResponseUtil::makeError("Contenido not found"), 400);
        }

        $contenido = $this->contenidoRepository->update($input, $id);

        return $this->sendResponse($contenido->toArray(), "Contenido updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/contenidos/{id}",
     *      summary="Remove the specified Contenido from storage",
     *      tags={"Contenido"},
     *      description="Delete Contenido",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Contenido",
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
        /** @var Contenido $contenido */
        $contenido = $this->contenidoRepository->find($id);

        if(empty($contenido)) {
            return Response::json(ResponseUtil::makeError("Contenido not found"), 400);
        }

        $contenido->delete();

        return $this->sendResponse($id, "Contenido deleted successfully");
    }
}
