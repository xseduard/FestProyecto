<?php

use App\Models\ProyectoCategoria;
use App\Repositories\ProyectoCategoriaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProyectoCategoriaRepositoryTest extends TestCase
{
    use MakeProyectoCategoriaTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ProyectoCategoriaRepository
     */
    protected $proyectoCategoriaRepo;

    public function setUp()
    {
        parent::setUp();
        $this->proyectoCategoriaRepo = App::make(ProyectoCategoriaRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_proyecto_categoria()
    {
        $proyectoCategoria = $this->fakeProyectoCategoriaData();
        $createdProyectoCategoria = $this->proyectoCategoriaRepo->create($proyectoCategoria);
        $createdProyectoCategoria = $createdProyectoCategoria->toArray();
        $this->assertArrayHasKey('id', $createdProyectoCategoria);
        $this->assertNotNull($createdProyectoCategoria['id'], 'Created ProyectoCategoria must have id specified');
        $this->assertNotNull(ProyectoCategoria::find($createdProyectoCategoria['id']), 'ProyectoCategoria with given id must be in DB');
        $this->assertModelData($proyectoCategoria, $createdProyectoCategoria);
    }

    /**
     * @test read
     */
    function it_reads_proyecto_categorias()
    {
        $proyectoCategoria = $this->makeProyectoCategoria();
        $dbProyectoCategoria = $this->proyectoCategoriaRepo->find($proyectoCategoria->id);
        $dbProyectoCategoria = $dbProyectoCategoria->toArray();
        $this->assertModelData($proyectoCategoria->toArray(), $dbProyectoCategoria);
    }

    /**
     * @test update
     */
    function it_updates_proyecto_categoria()
    {
        $proyectoCategoria = $this->makeProyectoCategoria();
        $fakeProyectoCategoria = $this->fakeProyectoCategoriaData();
        $updatedProyectoCategoria = $this->proyectoCategoriaRepo->update($fakeProyectoCategoria, $proyectoCategoria->id);
        $this->assertModelData($fakeProyectoCategoria, $updatedProyectoCategoria->toArray());
        $dbProyectoCategoria = $this->proyectoCategoriaRepo->find($proyectoCategoria->id);
        $this->assertModelData($fakeProyectoCategoria, $dbProyectoCategoria->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_proyecto_categoria()
    {
        $proyectoCategoria = $this->makeProyectoCategoria();
        $resp = $this->proyectoCategoriaRepo->delete($proyectoCategoria->id);
        $this->assertTrue($resp);
        $this->assertNull(ProyectoCategoria::find($proyectoCategoria->id), 'ProyectoCategoria should not exist in DB');
    }
}