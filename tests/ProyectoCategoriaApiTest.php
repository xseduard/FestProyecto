<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProyectoCategoriaApiTest extends TestCase
{
    use MakeProyectoCategoriaTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_proyecto_categorias()
    {
        $proyectoCategoria = $this->fakeProyectoCategoriaData();
        $this->json('POST', "/api/v1/proyectoCategorias", $proyectoCategoria);

        $this->assertApiResponse($proyectoCategoria);
    }

    /**
     * @test
     */
    function it_can_read_proyecto_categoria()
    {
        $proyectoCategoria = $this->makeProyectoCategoria();
        $this->json("GET", "/api/v1/proyectoCategorias/{$proyectoCategoria->id}");

        $this->assertApiResponse($proyectoCategoria->toArray());
    }

    /**
     * @test
     */
    function it_can_update_proyecto_categoria()
    {
        $proyectoCategoria = $this->makeProyectoCategoria();
        $editedProyectoCategoria = $this->fakeProyectoCategoriaData();

        $this->json('PUT', "/api/v1/proyectoCategorias/{$proyectoCategoria->id}", $editedProyectoCategoria);

        $this->assertApiResponse($editedProyectoCategoria);
    }

    /**
     * @test
     */
    function it_can_delete_proyecto_categorias()
    {
        $proyectoCategoria = $this->makeProyectoCategoria();
        $this->json("DELETE", "/api/v1/proyectoCategorias/{$proyectoCategoria->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/proyectoCategorias/{$proyectoCategoria->id}");

        $this->assertResponseStatus(404);
    }

}
