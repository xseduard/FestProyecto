<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RelIntegraApiTest extends TestCase
{
    use MakeRelIntegraTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_rel_integras()
    {
        $relIntegra = $this->fakeRelIntegraData();
        $this->json('POST', "/api/v1/relIntegras", $relIntegra);

        $this->assertApiResponse($relIntegra);
    }

    /**
     * @test
     */
    function it_can_read_rel_integra()
    {
        $relIntegra = $this->makeRelIntegra();
        $this->json("GET", "/api/v1/relIntegras/{$relIntegra->id}");

        $this->assertApiResponse($relIntegra->toArray());
    }

    /**
     * @test
     */
    function it_can_update_rel_integra()
    {
        $relIntegra = $this->makeRelIntegra();
        $editedRelIntegra = $this->fakeRelIntegraData();

        $this->json('PUT', "/api/v1/relIntegras/{$relIntegra->id}", $editedRelIntegra);

        $this->assertApiResponse($editedRelIntegra);
    }

    /**
     * @test
     */
    function it_can_delete_rel_integras()
    {
        $relIntegra = $this->makeRelIntegra();
        $this->json("DELETE", "/api/v1/relIntegras/{$relIntegra->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/relIntegras/{$relIntegra->id}");

        $this->assertResponseStatus(404);
    }

}
