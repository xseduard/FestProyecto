<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateGrupoJuradoAPIRequest;
use App\Http\Requests\API\UpdateGrupoJuradoAPIRequest;
use App\Models\GrupoJurado;
use App\Repositories\GrupoJuradoRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class GrupoJuradoController
 * @package App\Http\Controllers\API
 */

class GrupoJuradoAPIController extends AppBaseController
{
    /** @var  GrupoJuradoRepository */
    private $grupoJuradoRepository;

    function __construct(GrupoJuradoRepository $grupoJuradoRepo)
    {
        $this->grupoJuradoRepository = $grupoJuradoRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/grupoJurados",
     *      summary="Get a listing of the GrupoJurados.",
     *      tags={"GrupoJurado"},
     *      description="Get all GrupoJurados",
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
     *                  @SWG\Items(ref="#/definitions/GrupoJurado")
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
        $this->grupoJuradoRepository->pushCriteria(new RequestCriteria($request));
        $this->grupoJuradoRepository->pushCriteria(new LimitOffsetCriteria($request));
        $grupoJurados = $this->grupoJuradoRepository->all();

        return $this->sendResponse($grupoJurados->toArray(), "GrupoJurados retrieved successfully");
    }

    /**
     * @param CreateGrupoJuradoAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/grupoJurados",
     *      summary="Store a newly created GrupoJurado in storage",
     *      tags={"GrupoJurado"},
     *      description="Store GrupoJurado",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="GrupoJurado that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/GrupoJurado")
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
     *                  ref="#/definitions/GrupoJurado"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateGrupoJuradoAPIRequest $request)
    {
        $input = $request->all();

        $grupoJurados = $this->grupoJuradoRepository->create($input);

        return $this->sendResponse($grupoJurados->toArray(), "GrupoJurado saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/grupoJurados/{id}",
     *      summary="Display the specified GrupoJurado",
     *      tags={"GrupoJurado"},
     *      description="Get GrupoJurado",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of GrupoJurado",
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
     *                  ref="#/definitions/GrupoJurado"
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
        /** @var GrupoJurado $grupoJurado */
        $grupoJurado = $this->grupoJuradoRepository->find($id);

        if(empty($grupoJurado)) {
            return Response::json(ResponseUtil::makeError("GrupoJurado not found"), 400);
        }

        return $this->sendResponse($grupoJurado->toArray(), "GrupoJurado retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateGrupoJuradoAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/grupoJurados/{id}",
     *      summary="Update the specified GrupoJurado in storage",
     *      tags={"GrupoJurado"},
     *      description="Update GrupoJurado",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of GrupoJurado",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="GrupoJurado that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/GrupoJurado")
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
     *                  ref="#/definitions/GrupoJurado"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateGrupoJuradoAPIRequest $request)
    {
        $input = $request->all();

        /** @var GrupoJurado $grupoJurado */
        $grupoJurado = $this->grupoJuradoRepository->find($id);

        if (empty($grupoJurado)) {
            return Response::json(ResponseUtil::makeError("GrupoJurado not found"), 400);
        }

        $grupoJurado = $this->grupoJuradoRepository->update($input, $id);

        return $this->sendResponse($grupoJurado->toArray(), "GrupoJurado updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/grupoJurados/{id}",
     *      summary="Remove the specified GrupoJurado from storage",
     *      tags={"GrupoJurado"},
     *      description="Delete GrupoJurado",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of GrupoJurado",
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
        /** @var GrupoJurado $grupoJurado */
        $grupoJurado = $this->grupoJuradoRepository->find($id);

        if(empty($grupoJurado)) {
            return Response::json(ResponseUtil::makeError("GrupoJurado not found"), 400);
        }

        $grupoJurado->delete();

        return $this->sendResponse($id, "GrupoJurado deleted successfully");
    }
}
