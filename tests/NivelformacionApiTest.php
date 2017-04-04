<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NivelformacionApiTest extends TestCase
{
    use MakeNivelformacionTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_nivelformacions()
    {
        $nivelformacion = $this->fakeNivelformacionData();
        $this->json('POST', "/api/v1/nivelformacions", $nivelformacion);

        $this->assertApiResponse($nivelformacion);
    }

    /**
     * @test
     */
    function it_can_read_nivelformacion()
    {
        $nivelformacion = $this->makeNivelformacion();
        $this->json("GET", "/api/v1/nivelformacions/{$nivelformacion->id}");

        $this->assertApiResponse($nivelformacion->toArray());
    }

    /**
     * @test
     */
    function it_can_update_nivelformacion()
    {
        $nivelformacion = $this->makeNivelformacion();
        $editedNivelformacion = $this->fakeNivelformacionData();

        $this->json('PUT', "/api/v1/nivelformacions/{$nivelformacion->id}", $editedNivelformacion);

        $this->assertApiResponse($editedNivelformacion);
    }

    /**
     * @test
     */
    function it_can_delete_nivelformacions()
    {
        $nivelformacion = $this->makeNivelformacion();
        $this->json("DELETE", "/api/v1/nivelformacions/{$nivelformacion->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/nivelformacions/{$nivelformacion->id}");

        $this->assertResponseStatus(404);
    }

}
