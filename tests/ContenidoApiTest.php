<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContenidoApiTest extends TestCase
{
    use MakeContenidoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_contenidos()
    {
        $contenido = $this->fakeContenidoData();
        $this->json('POST', "/api/v1/contenidos", $contenido);

        $this->assertApiResponse($contenido);
    }

    /**
     * @test
     */
    function it_can_read_contenido()
    {
        $contenido = $this->makeContenido();
        $this->json("GET", "/api/v1/contenidos/{$contenido->id}");

        $this->assertApiResponse($contenido->toArray());
    }

    /**
     * @test
     */
    function it_can_update_contenido()
    {
        $contenido = $this->makeContenido();
        $editedContenido = $this->fakeContenidoData();

        $this->json('PUT', "/api/v1/contenidos/{$contenido->id}", $editedContenido);

        $this->assertApiResponse($editedContenido);
    }

    /**
     * @test
     */
    function it_can_delete_contenidos()
    {
        $contenido = $this->makeContenido();
        $this->json("DELETE", "/api/v1/contenidos/{$contenido->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/contenidos/{$contenido->id}");

        $this->assertResponseStatus(404);
    }

}
