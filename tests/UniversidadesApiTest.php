<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UniversidadesApiTest extends TestCase
{
    use MakeUniversidadesTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_universidades()
    {
        $universidades = $this->fakeUniversidadesData();
        $this->json('POST', "/api/v1/universidades", $universidades);

        $this->assertApiResponse($universidades);
    }

    /**
     * @test
     */
    function it_can_read_universidades()
    {
        $universidades = $this->makeUniversidades();
        $this->json("GET", "/api/v1/universidades/{$universidades->id}");

        $this->assertApiResponse($universidades->toArray());
    }

    /**
     * @test
     */
    function it_can_update_universidades()
    {
        $universidades = $this->makeUniversidades();
        $editedUniversidades = $this->fakeUniversidadesData();

        $this->json('PUT', "/api/v1/universidades/{$universidades->id}", $editedUniversidades);

        $this->assertApiResponse($editedUniversidades);
    }

    /**
     * @test
     */
    function it_can_delete_universidades()
    {
        $universidades = $this->makeUniversidades();
        $this->json("DELETE", "/api/v1/universidades/{$universidades->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/universidades/{$universidades->id}");

        $this->assertResponseStatus(404);
    }

}
