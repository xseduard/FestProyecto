<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatemunicipioAPIRequest;
use App\Http\Requests\API\UpdatemunicipioAPIRequest;
use App\Models\municipio;
use App\Repositories\municipioRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class municipioController
 * @package App\Http\Controllers\API
 */

class municipioAPIController extends AppBaseController
{
    /** @var  municipioRepository */
    private $municipioRepository;

    function __construct(municipioRepository $municipioRepo)
    {
        $this->municipioRepository = $municipioRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/municipios",
     *      summary="Get a listing of the municipios.",
     *      tags={"municipio"},
     *      description="Get all municipios",
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
     *                  @SWG\Items(ref="#/definitions/municipio")
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
        $this->municipioRepository->pushCriteria(new RequestCriteria($request));
        $this->municipioRepository->pushCriteria(new LimitOffsetCriteria($request));
        $municipios = $this->municipioRepository->all();

        return $this->sendResponse($municipios->toArray(), "municipios retrieved successfully");
    }

    /**
     * @param CreatemunicipioAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/municipios",
     *      summary="Store a newly created municipio in storage",
     *      tags={"municipio"},
     *      description="Store municipio",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="municipio that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/municipio")
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
     *                  ref="#/definitions/municipio"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreatemunicipioAPIRequest $request)
    {
        $input = $request->all();

        $municipios = $this->municipioRepository->create($input);

        return $this->sendResponse($municipios->toArray(), "municipio saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/municipios/{id}",
     *      summary="Display the specified municipio",
     *      tags={"municipio"},
     *      description="Get municipio",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of municipio",
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
     *                  ref="#/definitions/municipio"
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
        /** @var municipio $municipio */
        $municipio = $this->municipioRepository->find($id);

        if(empty($municipio)) {
            return Response::json(ResponseUtil::makeError("municipio not found"), 400);
        }

        return $this->sendResponse($municipio->toArray(), "municipio retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdatemunicipioAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/municipios/{id}",
     *      summary="Update the specified municipio in storage",
     *      tags={"municipio"},
     *      description="Update municipio",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of municipio",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="municipio that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/municipio")
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
     *                  ref="#/definitions/municipio"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdatemunicipioAPIRequest $request)
    {
        $input = $request->all();

        /** @var municipio $municipio */
        $municipio = $this->municipioRepository->find($id);

        if (empty($municipio)) {
            return Response::json(ResponseUtil::makeError("municipio not found"), 400);
        }

        $municipio = $this->municipioRepository->update($input, $id);

        return $this->sendResponse($municipio->toArray(), "municipio updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/municipios/{id}",
     *      summary="Remove the specified municipio from storage",
     *      tags={"municipio"},
     *      description="Delete municipio",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of municipio",
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
        /** @var municipio $municipio */
        $municipio = $this->municipioRepository->find($id);

        if(empty($municipio)) {
            return Response::json(ResponseUtil::makeError("municipio not found"), 400);
        }

        $municipio->delete();

        return $this->sendResponse($id, "municipio deleted successfully");
    }
}
