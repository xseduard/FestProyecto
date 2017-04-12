<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class JuradoApiTest extends TestCase
{
    use MakeJuradoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_jurados()
    {
        $jurado = $this->fakeJuradoData();
        $this->json('POST', "/api/v1/jurados", $jurado);

        $this->assertApiResponse($jurado);
    }

    /**
     * @test
     */
    function it_can_read_jurado()
    {
        $jurado = $this->makeJurado();
        $this->json("GET", "/api/v1/jurados/{$jurado->id}");

        $this->assertApiResponse($jurado->toArray());
    }

    /**
     * @test
     */
    function it_can_update_jurado()
    {
        $jurado = $this->makeJurado();
        $editedJurado = $this->fakeJuradoData();

        $this->json('PUT', "/api/v1/jurados/{$jurado->id}", $editedJurado);

        $this->assertApiResponse($editedJurado);
    }

    /**
     * @test
     */
    function it_can_delete_jurados()
    {
        $jurado = $this->makeJurado();
        $this->json("DELETE", "/api/v1/jurados/{$jurado->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/jurados/{$jurado->id}");

        $this->assertResponseStatus(404);
    }

}
