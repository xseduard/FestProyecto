<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateEventoExpoAPIRequest;
use App\Http\Requests\API\UpdateEventoExpoAPIRequest;
use App\Models\EventoExpo;
use App\Repositories\EventoExpoRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class EventoExpoController
 * @package App\Http\Controllers\API
 */

class EventoExpoAPIController extends AppBaseController
{
    /** @var  EventoExpoRepository */
    private $eventoExpoRepository;

    function __construct(EventoExpoRepository $eventoExpoRepo)
    {
        $this->eventoExpoRepository = $eventoExpoRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/eventoExpos",
     *      summary="Get a listing of the EventoExpos.",
     *      tags={"EventoExpo"},
     *      description="Get all EventoExpos",
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
     *                  @SWG\Items(ref="#/definitions/EventoExpo")
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
        $this->eventoExpoRepository->pushCriteria(new RequestCriteria($request));
        $this->eventoExpoRepository->pushCriteria(new LimitOffsetCriteria($request));
        $eventoExpos = $this->eventoExpoRepository->all();

        return $this->sendResponse($eventoExpos->toArray(), "EventoExpos retrieved successfully");
    }

    /**
     * @param CreateEventoExpoAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/eventoExpos",
     *      summary="Store a newly created EventoExpo in storage",
     *      tags={"EventoExpo"},
     *      description="Store EventoExpo",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="EventoExpo that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/EventoExpo")
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
     *                  ref="#/definitions/EventoExpo"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateEventoExpoAPIRequest $request)
    {
        $input = $request->all();

        $eventoExpos = $this->eventoExpoRepository->create($input);

        return $this->sendResponse($eventoExpos->toArray(), "EventoExpo saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/eventoExpos/{id}",
     *      summary="Display the specified EventoExpo",
     *      tags={"EventoExpo"},
     *      description="Get EventoExpo",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of EventoExpo",
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
     *                  ref="#/definitions/EventoExpo"
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
        /** @var EventoExpo $eventoExpo */
        $eventoExpo = $this->eventoExpoRepository->find($id);

        if(empty($eventoExpo)) {
            return Response::json(ResponseUtil::makeError("EventoExpo not found"), 400);
        }

        return $this->sendResponse($eventoExpo->toArray(), "EventoExpo retrieved successfully");
    }

    /**
     * @param int $id
     * @param UpdateEventoExpoAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/eventoExpos/{id}",
     *      summary="Update the specified EventoExpo in storage",
     *      tags={"EventoExpo"},
     *      description="Update EventoExpo",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of EventoExpo",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="EventoExpo that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/EventoExpo")
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
     *                  ref="#/definitions/EventoExpo"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateEventoExpoAPIRequest $request)
    {
        $input = $request->all();

        /** @var EventoExpo $eventoExpo */
        $eventoExpo = $this->eventoExpoRepository->find($id);

        if (empty($eventoExpo)) {
            return Response::json(ResponseUtil::makeError("EventoExpo not found"), 400);
        }

        $eventoExpo = $this->eventoExpoRepository->update($input, $id);

        return $this->sendResponse($eventoExpo->toArray(), "EventoExpo updated successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/eventoExpos/{id}",
     *      summary="Remove the specified EventoExpo from storage",
     *      tags={"EventoExpo"},
     *      description="Delete EventoExpo",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of EventoExpo",
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
        /** @var EventoExpo $eventoExpo */
        $eventoExpo = $this->eventoExpoRepository->find($id);

        if(empty($eventoExpo)) {
            return Response::json(ResponseUtil::makeError("EventoExpo not found"), 400);
        }

        $eventoExpo->delete();

        return $this->sendResponse($id, "EventoExpo deleted successfully");
    }
}
