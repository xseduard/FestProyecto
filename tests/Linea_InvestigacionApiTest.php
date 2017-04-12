<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class Linea_InvestigacionApiTest extends TestCase
{
    use MakeLinea_InvestigacionTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_linea__investigacions()
    {
        $lineaInvestigacion = $this->fakeLinea_InvestigacionData();
        $this->json('POST', "/api/v1/lineaInvestigacions", $lineaInvestigacion);

        $this->assertApiResponse($lineaInvestigacion);
    }

    /**
     * @test
     */
    function it_can_read_linea__investigacion()
    {
        $lineaInvestigacion = $this->makeLinea_Investigacion();
        $this->json("GET", "/api/v1/lineaInvestigacions/{$lineaInvestigacion->id}");

        $this->assertApiResponse($lineaInvestigacion->toArray());
    }

    /**
     * @test
     */
    function it_can_update_linea__investigacion()
    {
        $lineaInvestigacion = $this->makeLinea_Investigacion();
        $editedLinea_Investigacion = $this->fakeLinea_InvestigacionData();

        $this->json('PUT', "/api/v1/lineaInvestigacions/{$lineaInvestigacion->id}", $editedLinea_Investigacion);

        $this->assertApiResponse($editedLinea_Investigacion);
    }

    /**
     * @test
     */
    function it_can_delete_linea__investigacions()
    {
        $lineaInvestigacion = $this->makeLinea_Investigacion();
        $this->json("DELETE", "/api/v1/lineaInvestigacions/{$lineaInvestigacion->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/lineaInvestigacions/{$lineaInvestigacion->id}");

        $this->assertResponseStatus(404);
    }

}
