<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SubareaApiTest extends TestCase
{
    use MakeSubareaTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_subareas()
    {
        $subarea = $this->fakeSubareaData();
        $this->json('POST', "/api/v1/subareas", $subarea);

        $this->assertApiResponse($subarea);
    }

    /**
     * @test
     */
    function it_can_read_subarea()
    {
        $subarea = $this->makeSubarea();
        $this->json("GET", "/api/v1/subareas/{$subarea->id}");

        $this->assertApiResponse($subarea->toArray());
    }

    /**
     * @test
     */
    function it_can_update_subarea()
    {
        $subarea = $this->makeSubarea();
        $editedSubarea = $this->fakeSubareaData();

        $this->json('PUT', "/api/v1/subareas/{$subarea->id}", $editedSubarea);

        $this->assertApiResponse($editedSubarea);
    }

    /**
     * @test
     */
    function it_can_delete_subareas()
    {
        $subarea = $this->makeSubarea();
        $this->json("DELETE", "/api/v1/subareas/{$subarea->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/subareas/{$subarea->id}");

        $this->assertResponseStatus(404);
    }

}
