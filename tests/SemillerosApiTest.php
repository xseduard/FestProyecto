<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SemillerosApiTest extends TestCase
{
    use MakeSemillerosTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_semilleros()
    {
        $semilleros = $this->fakeSemillerosData();
        $this->json('POST', "/api/v1/semilleros", $semilleros);

        $this->assertApiResponse($semilleros);
    }

    /**
     * @test
     */
    function it_can_read_semilleros()
    {
        $semilleros = $this->makeSemilleros();
        $this->json("GET", "/api/v1/semilleros/{$semilleros->id}");

        $this->assertApiResponse($semilleros->toArray());
    }

    /**
     * @test
     */
    function it_can_update_semilleros()
    {
        $semilleros = $this->makeSemilleros();
        $editedSemilleros = $this->fakeSemillerosData();

        $this->json('PUT', "/api/v1/semilleros/{$semilleros->id}", $editedSemilleros);

        $this->assertApiResponse($editedSemilleros);
    }

    /**
     * @test
     */
    function it_can_delete_semilleros()
    {
        $semilleros = $this->makeSemilleros();
        $this->json("DELETE", "/api/v1/semilleros/{$semilleros->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/semilleros/{$semilleros->id}");

        $this->assertResponseStatus(404);
    }

}
