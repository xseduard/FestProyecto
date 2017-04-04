<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AsignaturasApiTest extends TestCase
{
    use MakeAsignaturasTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_asignaturas()
    {
        $asignaturas = $this->fakeAsignaturasData();
        $this->json('POST', "/api/v1/asignaturas", $asignaturas);

        $this->assertApiResponse($asignaturas);
    }

    /**
     * @test
     */
    function it_can_read_asignaturas()
    {
        $asignaturas = $this->makeAsignaturas();
        $this->json("GET", "/api/v1/asignaturas/{$asignaturas->id}");

        $this->assertApiResponse($asignaturas->toArray());
    }

    /**
     * @test
     */
    function it_can_update_asignaturas()
    {
        $asignaturas = $this->makeAsignaturas();
        $editedAsignaturas = $this->fakeAsignaturasData();

        $this->json('PUT', "/api/v1/asignaturas/{$asignaturas->id}", $editedAsignaturas);

        $this->assertApiResponse($editedAsignaturas);
    }

    /**
     * @test
     */
    function it_can_delete_asignaturas()
    {
        $asignaturas = $this->makeAsignaturas();
        $this->json("DELETE", "/api/v1/asignaturas/{$asignaturas->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/asignaturas/{$asignaturas->id}");

        $this->assertResponseStatus(404);
    }

}
