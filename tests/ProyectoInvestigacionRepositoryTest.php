<?php

use App\Models\ProyectoInvestigacion;
use App\Repositories\ProyectoInvestigacionRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProyectoInvestigacionRepositoryTest extends TestCase
{
    use MakeProyectoInvestigacionTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ProyectoInvestigacionRepository
     */
    protected $proyectoInvestigacionRepo;

    public function setUp()
    {
        parent::setUp();
        $this->proyectoInvestigacionRepo = App::make(ProyectoInvestigacionRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_proyecto_investigacion()
    {
        $proyectoInvestigacion = $this->fakeProyectoInvestigacionData();
        $createdProyectoInvestigacion = $this->proyectoInvestigacionRepo->create($proyectoInvestigacion);
        $createdProyectoInvestigacion = $createdProyectoInvestigacion->toArray();
        $this->assertArrayHasKey('id', $createdProyectoInvestigacion);
        $this->assertNotNull($createdProyectoInvestigacion['id'], 'Created ProyectoInvestigacion must have id specified');
        $this->assertNotNull(ProyectoInvestigacion::find($createdProyectoInvestigacion['id']), 'ProyectoInvestigacion with given id must be in DB');
        $this->assertModelData($proyectoInvestigacion, $createdProyectoInvestigacion);
    }

    /**
     * @test read
     */
    function it_reads_proyecto_investigacions()
    {
        $proyectoInvestigacion = $this->makeProyectoInvestigacion();
        $dbProyectoInvestigacion = $this->proyectoInvestigacionRepo->find($proyectoInvestigacion->id);
        $dbProyectoInvestigacion = $dbProyectoInvestigacion->toArray();
        $this->assertModelData($proyectoInvestigacion->toArray(), $dbProyectoInvestigacion);
    }

    /**
     * @test update
     */
    function it_updates_proyecto_investigacion()
    {
        $proyectoInvestigacion = $this->makeProyectoInvestigacion();
        $fakeProyectoInvestigacion = $this->fakeProyectoInvestigacionData();
        $updatedProyectoInvestigacion = $this->proyectoInvestigacionRepo->update($fakeProyectoInvestigacion, $proyectoInvestigacion->id);
        $this->assertModelData($fakeProyectoInvestigacion, $updatedProyectoInvestigacion->toArray());
        $dbProyectoInvestigacion = $this->proyectoInvestigacionRepo->find($proyectoInvestigacion->id);
        $this->assertModelData($fakeProyectoInvestigacion, $dbProyectoInvestigacion->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_proyecto_investigacion()
    {
        $proyectoInvestigacion = $this->makeProyectoInvestigacion();
        $resp = $this->proyectoInvestigacionRepo->delete($proyectoInvestigacion->id);
        $this->assertTrue($resp);
        $this->assertNull(ProyectoInvestigacion::find($proyectoInvestigacion->id), 'ProyectoInvestigacion should not exist in DB');
    }
}