<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProyectoApiTest extends TestCase
{
    use MakeProyectoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_proyectos()
    {
        $proyecto = $this->fakeProyectoData();
        $this->json('POST', "/api/v1/proyectos", $proyecto);

        $this->assertApiResponse($proyecto);
    }

    /**
     * @test
     */
    function it_can_read_proyecto()
    {
        $proyecto = $this->makeProyecto();
        $this->json("GET", "/api/v1/proyectos/{$proyecto->id}");

        $this->assertApiResponse($proyecto->toArray());
    }

    /**
     * @test
     */
    function it_can_update_proyecto()
    {
        $proyecto = $this->makeProyecto();
        $editedProyecto = $this->fakeProyectoData();

        $this->json('PUT', "/api/v1/proyectos/{$proyecto->id}", $editedProyecto);

        $this->assertApiResponse($editedProyecto);
    }

    /**
     * @test
     */
    function it_can_delete_proyectos()
    {
        $proyecto = $this->makeProyecto();
        $this->json("DELETE", "/api/v1/proyectos/{$proyecto->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/proyectos/{$proyecto->id}");

        $this->assertResponseStatus(404);
    }

}
