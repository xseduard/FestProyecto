<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class areaApiTest extends TestCase
{
    use MakeareaTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_areas()
    {
        $area = $this->fakeareaData();
        $this->json('POST', "/api/v1/areas", $area);

        $this->assertApiResponse($area);
    }

    /**
     * @test
     */
    function it_can_read_area()
    {
        $area = $this->makearea();
        $this->json("GET", "/api/v1/areas/{$area->id}");

        $this->assertApiResponse($area->toArray());
    }

    /**
     * @test
     */
    function it_can_update_area()
    {
        $area = $this->makearea();
        $editedarea = $this->fakeareaData();

        $this->json('PUT', "/api/v1/areas/{$area->id}", $editedarea);

        $this->assertApiResponse($editedarea);
    }

    /**
     * @test
     */
    function it_can_delete_areas()
    {
        $area = $this->makearea();
        $this->json("DELETE", "/api/v1/areas/{$area->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/areas/{$area->id}");

        $this->assertResponseStatus(404);
    }

}
