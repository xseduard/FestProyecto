<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EventoExpoApiTest extends TestCase
{
    use MakeEventoExpoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_evento_expos()
    {
        $eventoExpo = $this->fakeEventoExpoData();
        $this->json('POST', "/api/v1/eventoExpos", $eventoExpo);

        $this->assertApiResponse($eventoExpo);
    }

    /**
     * @test
     */
    function it_can_read_evento_expo()
    {
        $eventoExpo = $this->makeEventoExpo();
        $this->json("GET", "/api/v1/eventoExpos/{$eventoExpo->id}");

        $this->assertApiResponse($eventoExpo->toArray());
    }

    /**
     * @test
     */
    function it_can_update_evento_expo()
    {
        $eventoExpo = $this->makeEventoExpo();
        $editedEventoExpo = $this->fakeEventoExpoData();

        $this->json('PUT', "/api/v1/eventoExpos/{$eventoExpo->id}", $editedEventoExpo);

        $this->assertApiResponse($editedEventoExpo);
    }

    /**
     * @test
     */
    function it_can_delete_evento_expos()
    {
        $eventoExpo = $this->makeEventoExpo();
        $this->json("DELETE", "/api/v1/eventoExpos/{$eventoExpo->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/eventoExpos/{$eventoExpo->id}");

        $this->assertResponseStatus(404);
    }

}
