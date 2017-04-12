<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class Grupo_InvestigacionApiTest extends TestCase
{
    use MakeGrupo_InvestigacionTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_grupo__investigacions()
    {
        $grupoInvestigacion = $this->fakeGrupo_InvestigacionData();
        $this->json('POST', "/api/v1/grupoInvestigacions", $grupoInvestigacion);

        $this->assertApiResponse($grupoInvestigacion);
    }

    /**
     * @test
     */
    function it_can_read_grupo__investigacion()
    {
        $grupoInvestigacion = $this->makeGrupo_Investigacion();
        $this->json("GET", "/api/v1/grupoInvestigacions/{$grupoInvestigacion->id}");

        $this->assertApiResponse($grupoInvestigacion->toArray());
    }

    /**
     * @test
     */
    function it_can_update_grupo__investigacion()
    {
        $grupoInvestigacion = $this->makeGrupo_Investigacion();
        $editedGrupo_Investigacion = $this->fakeGrupo_InvestigacionData();

        $this->json('PUT', "/api/v1/grupoInvestigacions/{$grupoInvestigacion->id}", $editedGrupo_Investigacion);

        $this->assertApiResponse($editedGrupo_Investigacion);
    }

    /**
     * @test
     */
    function it_can_delete_grupo__investigacions()
    {
        $grupoInvestigacion = $this->makeGrupo_Investigacion();
        $this->json("DELETE", "/api/v1/grupoInvestigacions/{$grupoInvestigacion->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/grupoInvestigacions/{$grupoInvestigacion->id}");

        $this->assertResponseStatus(404);
    }

}
