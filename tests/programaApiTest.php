<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class programaApiTest extends TestCase
{
    use MakeprogramaTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_programas()
    {
        $programa = $this->fakeprogramaData();
        $this->json('POST', "/api/v1/programas", $programa);

        $this->assertApiResponse($programa);
    }

    /**
     * @test
     */
    function it_can_read_programa()
    {
        $programa = $this->makeprograma();
        $this->json("GET", "/api/v1/programas/{$programa->id}");

        $this->assertApiResponse($programa->toArray());
    }

    /**
     * @test
     */
    function it_can_update_programa()
    {
        $programa = $this->makeprograma();
        $editedprograma = $this->fakeprogramaData();

        $this->json('PUT', "/api/v1/programas/{$programa->id}", $editedprograma);

        $this->assertApiResponse($editedprograma);
    }

    /**
     * @test
     */
    function it_can_delete_programas()
    {
        $programa = $this->makeprograma();
        $this->json("DELETE", "/api/v1/programas/{$programa->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/programas/{$programa->id}");

        $this->assertResponseStatus(404);
    }

}
