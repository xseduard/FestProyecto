<?php

use App\Models\Asignaturas;
use App\Repositories\AsignaturasRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AsignaturasRepositoryTest extends TestCase
{
    use MakeAsignaturasTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var AsignaturasRepository
     */
    protected $asignaturasRepo;

    public function setUp()
    {
        parent::setUp();
        $this->asignaturasRepo = App::make(AsignaturasRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_asignaturas()
    {
        $asignaturas = $this->fakeAsignaturasData();
        $createdAsignaturas = $this->asignaturasRepo->create($asignaturas);
        $createdAsignaturas = $createdAsignaturas->toArray();
        $this->assertArrayHasKey('id', $createdAsignaturas);
        $this->assertNotNull($createdAsignaturas['id'], 'Created Asignaturas must have id specified');
        $this->assertNotNull(Asignaturas::find($createdAsignaturas['id']), 'Asignaturas with given id must be in DB');
        $this->assertModelData($asignaturas, $createdAsignaturas);
    }

    /**
     * @test read
     */
    function it_reads_asignaturas()
    {
        $asignaturas = $this->makeAsignaturas();
        $dbAsignaturas = $this->asignaturasRepo->find($asignaturas->id);
        $dbAsignaturas = $dbAsignaturas->toArray();
        $this->assertModelData($asignaturas->toArray(), $dbAsignaturas);
    }

    /**
     * @test update
     */
    function it_updates_asignaturas()
    {
        $asignaturas = $this->makeAsignaturas();
        $fakeAsignaturas = $this->fakeAsignaturasData();
        $updatedAsignaturas = $this->asignaturasRepo->update($fakeAsignaturas, $asignaturas->id);
        $this->assertModelData($fakeAsignaturas, $updatedAsignaturas->toArray());
        $dbAsignaturas = $this->asignaturasRepo->find($asignaturas->id);
        $this->assertModelData($fakeAsignaturas, $dbAsignaturas->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_asignaturas()
    {
        $asignaturas = $this->makeAsignaturas();
        $resp = $this->asignaturasRepo->delete($asignaturas->id);
        $this->assertTrue($resp);
        $this->assertNull(Asignaturas::find($asignaturas->id), 'Asignaturas should not exist in DB');
    }
}