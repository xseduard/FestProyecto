<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateNotaAPIRequest;
use App\Http\Requests\API\UpdateNotaAPIRequest;
use App\Models\Nota;
use App\Repositories\NotaRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class NotaController
 * @package App\Http\Controllers\API
 */

class NotaAPIController extends AppBaseController
{
    /** @var  NotaRepository */
    private $notaRepository;

    function __construct(NotaRepository $notaRepo)
    {
        $this->notaRepository = $notaRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/notas",
     *      summary="Get a listing of the Notas.",
     *      tags={"Nota"},
     *      description="Get all Notas",
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
     *                  @SWG\Items(ref="#/definitions/Nota")
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
        $this->notaRepository->pushCriteria(new RequestCriteria($request));
        $this->notaRepository->pushCriteria(new LimitOffsetCriteria($request));
        $notas = $this->notaRepository->all();

        return $this->sendResponse($notas->toArray(), "Notas retrieved successfully");
    }

    /**
     * @param CreateNotaAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/notas",
     *      summary="Store a newly created Nota in storage",
     *      tags={"Nota"},
     *      description="Store Nota",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Nota that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Nota")
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
     *                  ref="#/definitions/Nota"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateNotaAPIRequest $request)
    {
        $input = $request->all();

        $notas = $this->notaRepository->create($input);

        return $this->sendResponse($notas->toArray(), "Nota saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/notas/{id}",
     *      summary="Display the specified Nota",
     *      tags={"Nota"},
     *      description="Get Nota",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Nota",
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
     *                  ref="#/definitions/Nota"
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
        /** @var Nota $nota */
        $nota = $this->notaRepository->find($id);

        if(empty($nota)) {
            return Response::json(ResponseUtil::makeError("Nota not found"), 400);
        }

        return $this->sendResponse($nota->toArray(), "Nota retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateNotaAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/notas/{id}",
     *      summary="Update the specified Nota in storage",
     *      tags={"Nota"},
     *      description="Update Nota",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Nota",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Nota that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Nota")
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
     *                  ref="#/definitions/Nota"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateNotaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Nota $nota */
        $nota = $this->notaRepository->find($id);

        if (empty($nota)) {
            return Response::json(ResponseUtil::makeError("Nota not found"), 400);
        }

        $nota = $this->notaRepository->update($input, $id);

        return $this->sendResponse($nota->toArray(), "Nota updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/notas/{id}",
     *      summary="Remove the specified Nota from storage",
     *      tags={"Nota"},
     *      description="Delete Nota",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Nota",
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
        /** @var Nota $nota */
        $nota = $this->notaRepository->find($id);

        if(empty($nota)) {
            return Response::json(ResponseUtil::makeError("Nota not found"), 400);
        }

        $nota->delete();

        return $this->sendResponse($id, "Nota deleted successfully");
    }
}
