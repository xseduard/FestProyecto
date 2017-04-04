<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProyectoInvestigacionApiTest extends TestCase
{
    use MakeProyectoInvestigacionTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_proyecto_investigacions()
    {
        $proyectoInvestigacion = $this->fakeProyectoInvestigacionData();
        $this->json('POST', "/api/v1/proyectoInvestigacions", $proyectoInvestigacion);

        $this->assertApiResponse($proyectoInvestigacion);
    }

    /**
     * @test
     */
    function it_can_read_proyecto_investigacion()
    {
        $proyectoInvestigacion = $this->makeProyectoInvestigacion();
        $this->json("GET", "/api/v1/proyectoInvestigacions/{$proyectoInvestigacion->id}");

        $this->assertApiResponse($proyectoInvestigacion->toArray());
    }

    /**
     * @test
     */
    function it_can_update_proyecto_investigacion()
    {
        $proyectoInvestigacion = $this->makeProyectoInvestigacion();
        $editedProyectoInvestigacion = $this->fakeProyectoInvestigacionData();

        $this->json('PUT', "/api/v1/proyectoInvestigacions/{$proyectoInvestigacion->id}", $editedProyectoInvestigacion);

        $this->assertApiResponse($editedProyectoInvestigacion);
    }

    /**
     * @test
     */
    function it_can_delete_proyecto_investigacions()
    {
        $proyectoInvestigacion = $this->makeProyectoInvestigacion();
        $this->json("DELETE", "/api/v1/proyectoInvestigacions/{$proyectoInvestigacion->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/proyectoInvestigacions/{$proyectoInvestigacion->id}");

        $this->assertResponseStatus(404);
    }

}
