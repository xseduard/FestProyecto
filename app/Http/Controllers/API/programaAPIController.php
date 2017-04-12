<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateprogramaAPIRequest;
use App\Http\Requests\API\UpdateprogramaAPIRequest;
use App\Models\programa;
use App\Repositories\programaRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class programaController
 * @package App\Http\Controllers\API
 */

class programaAPIController extends AppBaseController
{
    /** @var  programaRepository */
    private $programaRepository;

    function __construct(programaRepository $programaRepo)
    {
        $this->programaRepository = $programaRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/programas",
     *      summary="Get a listing of the programas.",
     *      tags={"programa"},
     *      description="Get all programas",
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
     *                  @SWG\Items(ref="#/definitions/programa")
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
        $this->programaRepository->pushCriteria(new RequestCriteria($request));
        $this->programaRepository->pushCriteria(new LimitOffsetCriteria($request));
        $programas = $this->programaRepository->all();

        return $this->sendResponse($programas->toArray(), "programas retrieved successfully");
    }

    /**
     * @param CreateprogramaAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/programas",
     *      summary="Store a newly created programa in storage",
     *      tags={"programa"},
     *      description="Store programa",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="programa that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/programa")
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
     *                  ref="#/definitions/programa"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateprogramaAPIRequest $request)
    {
        $input = $request->all();

        $programas = $this->programaRepository->create($input);

        return $this->sendResponse($programas->toArray(), "programa saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/programas/{id}",
     *      summary="Display the specified programa",
     *      tags={"programa"},
     *      description="Get programa",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of programa",
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
     *                  ref="#/definitions/programa"
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
        /** @var programa $programa */
        $programa = $this->programaRepository->find($id);

        if(empty($programa)) {
            return Response::json(ResponseUtil::makeError("programa not found"), 400);
        }

        return $this->sendResponse($programa->toArray(), "programa retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateprogramaAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/programas/{id}",
     *      summary="Update the specified programa in storage",
     *      tags={"programa"},
     *      description="Update programa",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of programa",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="programa that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/programa")
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
     *                  ref="#/definitions/programa"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateprogramaAPIRequest $request)
    {
        $input = $request->all();

        /** @var programa $programa */
        $programa = $this->programaRepository->find($id);

        if (empty($programa)) {
            return Response::json(ResponseUtil::makeError("programa not found"), 400);
        }

        $programa = $this->programaRepository->update($input, $id);

        return $this->sendResponse($programa->toArray(), "programa updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/programas/{id}",
     *      summary="Remove the specified programa from storage",
     *      tags={"programa"},
     *      description="Delete programa",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of programa",
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
        /** @var programa $programa */
        $programa = $this->programaRepository->find($id);

        if(empty($programa)) {
            return Response::json(ResponseUtil::makeError("programa not found"), 400);
        }

        $programa->delete();

        return $this->sendResponse($id, "programa deleted successfully");
    }
}
