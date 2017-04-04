<?php

use App\Models\Nivelformacion;
use App\Repositories\NivelformacionRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NivelformacionRepositoryTest extends TestCase
{
    use MakeNivelformacionTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var NivelformacionRepository
     */
    protected $nivelformacionRepo;

    public function setUp()
    {
        parent::setUp();
        $this->nivelformacionRepo = App::make(NivelformacionRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_nivelformacion()
    {
        $nivelformacion = $this->fakeNivelformacionData();
        $createdNivelformacion = $this->nivelformacionRepo->create($nivelformacion);
        $createdNivelformacion = $createdNivelformacion->toArray();
        $this->assertArrayHasKey('id', $createdNivelformacion);
        $this->assertNotNull($createdNivelformacion['id'], 'Created Nivelformacion must have id specified');
        $this->assertNotNull(Nivelformacion::find($createdNivelformacion['id']), 'Nivelformacion with given id must be in DB');
        $this->assertModelData($nivelformacion, $createdNivelformacion);
    }

    /**
     * @test read
     */
    function it_reads_nivelformacions()
    {
        $nivelformacion = $this->makeNivelformacion();
        $dbNivelformacion = $this->nivelformacionRepo->find($nivelformacion->id);
        $dbNivelformacion = $dbNivelformacion->toArray();
        $this->assertModelData($nivelformacion->toArray(), $dbNivelformacion);
    }

    /**
     * @test update
     */
    function it_updates_nivelformacion()
    {
        $nivelformacion = $this->makeNivelformacion();
        $fakeNivelformacion = $this->fakeNivelformacionData();
        $updatedNivelformacion = $this->nivelformacionRepo->update($fakeNivelformacion, $nivelformacion->id);
        $this->assertModelData($fakeNivelformacion, $updatedNivelformacion->toArray());
        $dbNivelformacion = $this->nivelformacionRepo->find($nivelformacion->id);
        $this->assertModelData($fakeNivelformacion, $dbNivelformacion->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_nivelformacion()
    {
        $nivelformacion = $this->makeNivelformacion();
        $resp = $this->nivelformacionRepo->delete($nivelformacion->id);
        $this->assertTrue($resp);
        $this->assertNull(Nivelformacion::find($nivelformacion->id), 'Nivelformacion should not exist in DB');
    }
}