<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PaisApiTest extends TestCase
{
    use MakePaisTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_pais()
    {
        $pais = $this->fakePaisData();
        $this->json('POST', "/api/v1/pais", $pais);

        $this->assertApiResponse($pais);
    }

    /**
     * @test
     */
    function it_can_read_pais()
    {
        $pais = $this->makePais();
        $this->json("GET", "/api/v1/pais/{$pais->id}");

        $this->assertApiResponse($pais->toArray());
    }

    /**
     * @test
     */
    function it_can_update_pais()
    {
        $pais = $this->makePais();
        $editedPais = $this->fakePaisData();

        $this->json('PUT', "/api/v1/pais/{$pais->id}", $editedPais);

        $this->assertApiResponse($editedPais);
    }

    /**
     * @test
     */
    function it_can_delete_pais()
    {
        $pais = $this->makePais();
        $this->json("DELETE", "/api/v1/pais/{$pais->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/pais/{$pais->id}");

        $this->assertResponseStatus(404);
    }

}
