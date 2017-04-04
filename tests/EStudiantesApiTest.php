<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EStudiantesApiTest extends TestCase
{
    use MakeEStudiantesTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_e_studiantes()
    {
        $eStudiantes = $this->fakeEStudiantesData();
        $this->json('POST', "/api/v1/eStudiantes", $eStudiantes);

        $this->assertApiResponse($eStudiantes);
    }

    /**
     * @test
     */
    function it_can_read_e_studiantes()
    {
        $eStudiantes = $this->makeEStudiantes();
        $this->json("GET", "/api/v1/eStudiantes/{$eStudiantes->id}");

        $this->assertApiResponse($eStudiantes->toArray());
    }

    /**
     * @test
     */
    function it_can_update_e_studiantes()
    {
        $eStudiantes = $this->makeEStudiantes();
        $editedEStudiantes = $this->fakeEStudiantesData();

        $this->json('PUT', "/api/v1/eStudiantes/{$eStudiantes->id}", $editedEStudiantes);

        $this->assertApiResponse($editedEStudiantes);
    }

    /**
     * @test
     */
    function it_can_delete_e_studiantes()
    {
        $eStudiantes = $this->makeEStudiantes();
        $this->json("DELETE", "/api/v1/eStudiantes/{$eStudiantes->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/eStudiantes/{$eStudiantes->id}");

        $this->assertResponseStatus(404);
    }

}
