<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class departamentoApiTest extends TestCase
{
    use MakedepartamentoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_departamentos()
    {
        $departamento = $this->fakedepartamentoData();
        $this->json('POST', "/api/v1/departamentos", $departamento);

        $this->assertApiResponse($departamento);
    }

    /**
     * @test
     */
    function it_can_read_departamento()
    {
        $departamento = $this->makedepartamento();
        $this->json("GET", "/api/v1/departamentos/{$departamento->id}");

        $this->assertApiResponse($departamento->toArray());
    }

    /**
     * @test
     */
    function it_can_update_departamento()
    {
        $departamento = $this->makedepartamento();
        $editeddepartamento = $this->fakedepartamentoData();

        $this->json('PUT', "/api/v1/departamentos/{$departamento->id}", $editeddepartamento);

        $this->assertApiResponse($editeddepartamento);
    }

    /**
     * @test
     */
    function it_can_delete_departamentos()
    {
        $departamento = $this->makedepartamento();
        $this->json("DELETE", "/api/v1/departamentos/{$departamento->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/departamentos/{$departamento->id}");

        $this->assertResponseStatus(404);
    }

}
