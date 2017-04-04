<?php

use App\Models\Universidades;
use App\Repositories\UniversidadesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UniversidadesRepositoryTest extends TestCase
{
    use MakeUniversidadesTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var UniversidadesRepository
     */
    protected $universidadesRepo;

    public function setUp()
    {
        parent::setUp();
        $this->universidadesRepo = App::make(UniversidadesRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_universidades()
    {
        $universidades = $this->fakeUniversidadesData();
        $createdUniversidades = $this->universidadesRepo->create($universidades);
        $createdUniversidades = $createdUniversidades->toArray();
        $this->assertArrayHasKey('id', $createdUniversidades);
        $this->assertNotNull($createdUniversidades['id'], 'Created Universidades must have id specified');
        $this->assertNotNull(Universidades::find($createdUniversidades['id']), 'Universidades with given id must be in DB');
        $this->assertModelData($universidades, $createdUniversidades);
    }

    /**
     * @test read
     */
    function it_reads_universidades()
    {
        $universidades = $this->makeUniversidades();
        $dbUniversidades = $this->universidadesRepo->find($universidades->id);
        $dbUniversidades = $dbUniversidades->toArray();
        $this->assertModelData($universidades->toArray(), $dbUniversidades);
    }

    /**
     * @test update
     */
    function it_updates_universidades()
    {
        $universidades = $this->makeUniversidades();
        $fakeUniversidades = $this->fakeUniversidadesData();
        $updatedUniversidades = $this->universidadesRepo->update($fakeUniversidades, $universidades->id);
        $this->assertModelData($fakeUniversidades, $updatedUniversidades->toArray());
        $dbUniversidades = $this->universidadesRepo->find($universidades->id);
        $this->assertModelData($fakeUniversidades, $dbUniversidades->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_universidades()
    {
        $universidades = $this->makeUniversidades();
        $resp = $this->universidadesRepo->delete($universidades->id);
        $this->assertTrue($resp);
        $this->assertNull(Universidades::find($universidades->id), 'Universidades should not exist in DB');
    }
}