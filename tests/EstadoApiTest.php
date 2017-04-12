<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EstadoApiTest extends TestCase
{
    use MakeEstadoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_estados()
    {
        $estado = $this->fakeEstadoData();
        $this->json('POST', "/api/v1/estados", $estado);

        $this->assertApiResponse($estado);
    }

    /**
     * @test
     */
    function it_can_read_estado()
    {
        $estado = $this->makeEstado();
        $this->json("GET", "/api/v1/estados/{$estado->id}");

        $this->assertApiResponse($estado->toArray());
    }

    /**
     * @test
     */
    function it_can_update_estado()
    {
        $estado = $this->makeEstado();
        $editedEstado = $this->fakeEstadoData();

        $this->json('PUT', "/api/v1/estados/{$estado->id}", $editedEstado);

        $this->assertApiResponse($editedEstado);
    }

    /**
     * @test
     */
    function it_can_delete_estados()
    {
        $estado = $this->makeEstado();
        $this->json("DELETE", "/api/v1/estados/{$estado->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/estados/{$estado->id}");

        $this->assertResponseStatus(404);
    }

}
