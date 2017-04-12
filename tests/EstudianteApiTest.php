<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EstudianteApiTest extends TestCase
{
    use MakeEstudianteTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    function it_can_create_estudiantes()
    {
        $estudiante = $this->fakeEstudianteData();
        $this->json('POST', "/api/v1/estudiantes", $estudiante);

        $this->assertApiResponse($estudiante);
    }

    /**
     * @test
     */
    function it_can_read_estudiante()
    {
        $estudiante = $this->makeEstudiante();
        $this->json("GET", "/api/v1/estudiantes/{$estudiante->id}");

        $this->assertApiResponse($estudiante->toArray());
    }

    /**
     * @test
     */
    function it_can_update_estudiante()
    {
        $estudiante = $this->makeEstudiante();
        $editedEstudiante = $this->fakeEstudianteData();

        $this->json('PUT', "/api/v1/estudiantes/{$estudiante->id}", $editedEstudiante);

        $this->assertApiResponse($editedEstudiante);
    }

    /**
     * @test
     */
    function it_can_delete_estudiantes()
    {
        $estudiante = $this->makeEstudiante();
        $this->json("DELETE", "/api/v1/estudiantes/{$estudiante->id}");

        $this->assertApiSuccess();
        $this->json("GET", "/api/v1/estudiantes/{$estudiante->id}");

        $this->assertResponseStatus(404);
    }

}
