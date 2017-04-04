<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NodoApiTest extends TestCase
{
    use MakeNodoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_nodos()
    {
        $nodo = $this->fakeNodoData();
        $this->json('POST', "/api/v1/nodos", $nodo);

        $this->assertApiResponse($nodo);
    }

    /**
     * @test
     */
    function it_can_read_nodo()
    {
        $nodo = $this->makeNodo();
        $this->json("GET", "/api/v1/nodos/{$nodo->id}");

        $this->assertApiResponse($nodo->toArray());
    }

    /**
     * @test
     */
    function it_can_update_nodo()
    {
        $nodo = $this->makeNodo();
        $editedNodo = $this->fakeNodoData();

        $this->json('PUT', "/api/v1/nodos/{$nodo->id}", $editedNodo);

        $this->assertApiResponse($editedNodo);
    }

    /**
     * @test
     */
    function it_can_delete_nodos()
    {
        $nodo = $this->makeNodo();
        $this->json("DELETE", "/api/v1/nodos/{$nodo->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/nodos/{$nodo->id}");

        $this->assertResponseStatus(404);
    }

}
