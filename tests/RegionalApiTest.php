<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegionalApiTest extends TestCase
{
    use MakeRegionalTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_regionals()
    {
        $regional = $this->fakeRegionalData();
        $this->json('POST', "/api/v1/regionals", $regional);

        $this->assertApiResponse($regional);
    }

    /**
     * @test
     */
    function it_can_read_regional()
    {
        $regional = $this->makeRegional();
        $this->json("GET", "/api/v1/regionals/{$regional->id}");

        $this->assertApiResponse($regional->toArray());
    }

    /**
     * @test
     */
    function it_can_update_regional()
    {
        $regional = $this->makeRegional();
        $editedRegional = $this->fakeRegionalData();

        $this->json('PUT', "/api/v1/regionals/{$regional->id}", $editedRegional);

        $this->assertApiResponse($editedRegional);
    }

    /**
     * @test
     */
    function it_can_delete_regionals()
    {
        $regional = $this->makeRegional();
        $this->json("DELETE", "/api/v1/regionals/{$regional->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/regionals/{$regional->id}");

        $this->assertResponseStatus(404);
    }

}
