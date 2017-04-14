<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NotaApiTest extends TestCase
{
    use MakeNotaTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_notas()
    {
        $nota = $this->fakeNotaData();
        $this->json('POST', "/api/v1/notas", $nota);

        $this->assertApiResponse($nota);
    }

    /**
     * @test
     */
    function it_can_read_nota()
    {
        $nota = $this->makeNota();
        $this->json("GET", "/api/v1/notas/{$nota->id}");

        $this->assertApiResponse($nota->toArray());
    }

    /**
     * @test
     */
    function it_can_update_nota()
    {
        $nota = $this->makeNota();
        $editedNota = $this->fakeNotaData();

        $this->json('PUT', "/api/v1/notas/{$nota->id}", $editedNota);

        $this->assertApiResponse($editedNota);
    }

    /**
     * @test
     */
    function it_can_delete_notas()
    {
        $nota = $this->makeNota();
        $this->json("DELETE", "/api/v1/notas/{$nota->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/notas/{$nota->id}");

        $this->assertResponseStatus(404);
    }

}
