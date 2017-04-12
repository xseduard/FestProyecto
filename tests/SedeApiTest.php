<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SedeApiTest extends TestCase
{
    use MakeSedeTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_sedes()
    {
        $sede = $this->fakeSedeData();
        $this->json('POST', "/api/v1/sedes", $sede);

        $this->assertApiResponse($sede);
    }

    /**
     * @test
     */
    function it_can_read_sede()
    {
        $sede = $this->makeSede();
        $this->json("GET", "/api/v1/sedes/{$sede->id}");

        $this->assertApiResponse($sede->toArray());
    }

    /**
     * @test
     */
    function it_can_update_sede()
    {
        $sede = $this->makeSede();
        $editedSede = $this->fakeSedeData();

        $this->json('PUT', "/api/v1/sedes/{$sede->id}", $editedSede);

        $this->assertApiResponse($editedSede);
    }

    /**
     * @test
     */
    function it_can_delete_sedes()
    {
        $sede = $this->makeSede();
        $this->json("DELETE", "/api/v1/sedes/{$sede->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/sedes/{$sede->id}");

        $this->assertResponseStatus(404);
    }

}
