<?php

use App\Models\Proyecto;
use App\Repositories\ProyectoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProyectoRepositoryTest extends TestCase
{
    use MakeProyectoTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ProyectoRepository
     */
    protected $proyectoRepo;

    public function setUp()
    {
        parent::setUp();
        $this->proyectoRepo = App::make(ProyectoRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_proyecto()
    {
        $proyecto = $this->fakeProyectoData();
        $createdProyecto = $this->proyectoRepo->create($proyecto);
        $createdProyecto = $createdProyecto->toArray();
        $this->assertArrayHasKey('id', $createdProyecto);
        $this->assertNotNull($createdProyecto['id'], 'Created Proyecto must have id specified');
        $this->assertNotNull(Proyecto::find($createdProyecto['id']), 'Proyecto with given id must be in DB');
        $this->assertModelData($proyecto, $createdProyecto);
    }

    /**
     * @test read
     */
    function it_reads_proyectos()
    {
        $proyecto = $this->makeProyecto();
        $dbProyecto = $this->proyectoRepo->find($proyecto->id);
        $dbProyecto = $dbProyecto->toArray();
        $this->assertModelData($proyecto->toArray(), $dbProyecto);
    }

    /**
     * @test update
     */
    function it_updates_proyecto()
    {
        $proyecto = $this->makeProyecto();
        $fakeProyecto = $this->fakeProyectoData();
        $updatedProyecto = $this->proyectoRepo->update($fakeProyecto, $proyecto->id);
        $this->assertModelData($fakeProyecto, $updatedProyecto->toArray());
        $dbProyecto = $this->proyectoRepo->find($proyecto->id);
        $this->assertModelData($fakeProyecto, $dbProyecto->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_proyecto()
    {
        $proyecto = $this->makeProyecto();
        $resp = $this->proyectoRepo->delete($proyecto->id);
        $this->assertTrue($resp);
        $this->assertNull(Proyecto::find($proyecto->id), 'Proyecto should not exist in DB');
    }
}