<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AreainvestigacionApiTest extends TestCase
{
    use MakeAreainvestigacionTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_areainvestigacions()
    {
        $areainvestigacion = $this->fakeAreainvestigacionData();
        $this->json('POST', "/api/v1/areainvestigacions", $areainvestigacion);

        $this->assertApiResponse($areainvestigacion);
    }

    /**
     * @test
     */
    function it_can_read_areainvestigacion()
    {
        $areainvestigacion = $this->makeAreainvestigacion();
        $this->json("GET", "/api/v1/areainvestigacions/{$areainvestigacion->id}");

        $this->assertApiResponse($areainvestigacion->toArray());
    }

    /**
     * @test
     */
    function it_can_update_areainvestigacion()
    {
        $areainvestigacion = $this->makeAreainvestigacion();
        $editedAreainvestigacion = $this->fakeAreainvestigacionData();

        $this->json('PUT', "/api/v1/areainvestigacions/{$areainvestigacion->id}", $editedAreainvestigacion);

        $this->assertApiResponse($editedAreainvestigacion);
    }

    /**
     * @test
     */
    function it_can_delete_areainvestigacions()
    {
        $areainvestigacion = $this->makeAreainvestigacion();
        $this->json("DELETE", "/api/v1/areainvestigacions/{$areainvestigacion->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/areainvestigacions/{$areainvestigacion->id}");

        $this->assertResponseStatus(404);
    }

}
