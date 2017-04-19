<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TituloApiTest extends TestCase
{
    use MakeTituloTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_titulos()
    {
        $titulo = $this->fakeTituloData();
        $this->json('POST', "/api/v1/titulos", $titulo);

        $this->assertApiResponse($titulo);
    }

    /**
     * @test
     */
    function it_can_read_titulo()
    {
        $titulo = $this->makeTitulo();
        $this->json("GET", "/api/v1/titulos/{$titulo->id}");

        $this->assertApiResponse($titulo->toArray());
    }

    /**
     * @test
     */
    function it_can_update_titulo()
    {
        $titulo = $this->makeTitulo();
        $editedTitulo = $this->fakeTituloData();

        $this->json('PUT', "/api/v1/titulos/{$titulo->id}", $editedTitulo);

        $this->assertApiResponse($editedTitulo);
    }

    /**
     * @test
     */
    function it_can_delete_titulos()
    {
        $titulo = $this->makeTitulo();
        $this->json("DELETE", "/api/v1/titulos/{$titulo->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/titulos/{$titulo->id}");

        $this->assertResponseStatus(404);
    }

}
