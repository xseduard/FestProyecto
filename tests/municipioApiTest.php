<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class municipioApiTest extends TestCase
{
    use MakemunicipioTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_municipios()
    {
        $municipio = $this->fakemunicipioData();
        $this->json('POST', "/api/v1/municipios", $municipio);

        $this->assertApiResponse($municipio);
    }

    /**
     * @test
     */
    function it_can_read_municipio()
    {
        $municipio = $this->makemunicipio();
        $this->json("GET", "/api/v1/municipios/{$municipio->id}");

        $this->assertApiResponse($municipio->toArray());
    }

    /**
     * @test
     */
    function it_can_update_municipio()
    {
        $municipio = $this->makemunicipio();
        $editedmunicipio = $this->fakemunicipioData();

        $this->json('PUT', "/api/v1/municipios/{$municipio->id}", $editedmunicipio);

        $this->assertApiResponse($editedmunicipio);
    }

    /**
     * @test
     */
    function it_can_delete_municipios()
    {
        $municipio = $this->makemunicipio();
        $this->json("DELETE", "/api/v1/municipios/{$municipio->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/municipios/{$municipio->id}");

        $this->assertResponseStatus(404);
    }

}
