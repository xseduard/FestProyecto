<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GrupoJuradoApiTest extends TestCase
{
    use MakeGrupoJuradoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_grupo_jurados()
    {
        $grupoJurado = $this->fakeGrupoJuradoData();
        $this->json('POST', "/api/v1/grupoJurados", $grupoJurado);

        $this->assertApiResponse($grupoJurado);
    }

    /**
     * @test
     */
    function it_can_read_grupo_jurado()
    {
        $grupoJurado = $this->makeGrupoJurado();
        $this->json("GET", "/api/v1/grupoJurados/{$grupoJurado->id}");

        $this->assertApiResponse($grupoJurado->toArray());
    }

    /**
     * @test
     */
    function it_can_update_grupo_jurado()
    {
        $grupoJurado = $this->makeGrupoJurado();
        $editedGrupoJurado = $this->fakeGrupoJuradoData();

        $this->json('PUT', "/api/v1/grupoJurados/{$grupoJurado->id}", $editedGrupoJurado);

        $this->assertApiResponse($editedGrupoJurado);
    }

    /**
     * @test
     */
    function it_can_delete_grupo_jurados()
    {
        $grupoJurado = $this->makeGrupoJurado();
        $this->json("DELETE", "/api/v1/grupoJurados/{$grupoJurado->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/grupoJurados/{$grupoJurado->id}");

        $this->assertResponseStatus(404);
    }

}
