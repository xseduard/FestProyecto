<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SemilleroApiTest extends TestCase
{
    use MakeSemilleroTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_semilleros()
    {
        $semillero = $this->fakeSemilleroData();
        $this->json('POST', "/api/v1/semilleros", $semillero);

        $this->assertApiResponse($semillero);
    }

    /**
     * @test
     */
    function it_can_read_semillero()
    {
        $semillero = $this->makeSemillero();
        $this->json("GET", "/api/v1/semilleros/{$semillero->id}");

        $this->assertApiResponse($semillero->toArray());
    }

    /**
     * @test
     */
    function it_can_update_semillero()
    {
        $semillero = $this->makeSemillero();
        $editedSemillero = $this->fakeSemilleroData();

        $this->json('PUT', "/api/v1/semilleros/{$semillero->id}", $editedSemillero);

        $this->assertApiResponse($editedSemillero);
    }

    /**
     * @test
     */
    function it_can_delete_semilleros()
    {
        $semillero = $this->makeSemillero();
        $this->json("DELETE", "/api/v1/semilleros/{$semillero->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/semilleros/{$semillero->id}");

        $this->assertResponseStatus(404);
    }

}
