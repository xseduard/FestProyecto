<?php

use App\Models\Areainvestigacion;
use App\Repositories\AreainvestigacionRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AreainvestigacionRepositoryTest extends TestCase
{
    use MakeAreainvestigacionTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var AreainvestigacionRepository
     */
    protected $areainvestigacionRepo;

    public function setUp()
    {
        parent::setUp();
        $this->areainvestigacionRepo = App::make(AreainvestigacionRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_areainvestigacion()
    {
        $areainvestigacion = $this->fakeAreainvestigacionData();
        $createdAreainvestigacion = $this->areainvestigacionRepo->create($areainvestigacion);
        $createdAreainvestigacion = $createdAreainvestigacion->toArray();
        $this->assertArrayHasKey('id', $createdAreainvestigacion);
        $this->assertNotNull($createdAreainvestigacion['id'], 'Created Areainvestigacion must have id specified');
        $this->assertNotNull(Areainvestigacion::find($createdAreainvestigacion['id']), 'Areainvestigacion with given id must be in DB');
        $this->assertModelData($areainvestigacion, $createdAreainvestigacion);
    }

    /**
     * @test read
     */
    function it_reads_areainvestigacions()
    {
        $areainvestigacion = $this->makeAreainvestigacion();
        $dbAreainvestigacion = $this->areainvestigacionRepo->find($areainvestigacion->id);
        $dbAreainvestigacion = $dbAreainvestigacion->toArray();
        $this->assertModelData($areainvestigacion->toArray(), $dbAreainvestigacion);
    }

    /**
     * @test update
     */
    function it_updates_areainvestigacion()
    {
        $areainvestigacion = $this->makeAreainvestigacion();
        $fakeAreainvestigacion = $this->fakeAreainvestigacionData();
        $updatedAreainvestigacion = $this->areainvestigacionRepo->update($fakeAreainvestigacion, $areainvestigacion->id);
        $this->assertModelData($fakeAreainvestigacion, $updatedAreainvestigacion->toArray());
        $dbAreainvestigacion = $this->areainvestigacionRepo->find($areainvestigacion->id);
        $this->assertModelData($fakeAreainvestigacion, $dbAreainvestigacion->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_areainvestigacion()
    {
        $areainvestigacion = $this->makeAreainvestigacion();
        $resp = $this->areainvestigacionRepo->delete($areainvestigacion->id);
        $this->assertTrue($resp);
        $this->assertNull(Areainvestigacion::find($areainvestigacion->id), 'Areainvestigacion should not exist in DB');
    }
}