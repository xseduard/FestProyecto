<?php

use App\Models\programa;
use App\Repositories\programaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class programaRepositoryTest extends TestCase
{
    use MakeprogramaTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var programaRepository
     */
    protected $programaRepo;

    public function setUp()
    {
        parent::setUp();
        $this->programaRepo = App::make(programaRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_programa()
    {
        $programa = $this->fakeprogramaData();
        $createdprograma = $this->programaRepo->create($programa);
        $createdprograma = $createdprograma->toArray();
        $this->assertArrayHasKey('id', $createdprograma);
        $this->assertNotNull($createdprograma['id'], 'Created programa must have id specified');
        $this->assertNotNull(programa::find($createdprograma['id']), 'programa with given id must be in DB');
        $this->assertModelData($programa, $createdprograma);
    }

    /**
     * @test read
     */
    function it_reads_programas()
    {
        $programa = $this->makeprograma();
        $dbprograma = $this->programaRepo->find($programa->id);
        $dbprograma = $dbprograma->toArray();
        $this->assertModelData($programa->toArray(), $dbprograma);
    }

    /**
     * @test update
     */
    function it_updates_programa()
    {
        $programa = $this->makeprograma();
        $fakeprograma = $this->fakeprogramaData();
        $updatedprograma = $this->programaRepo->update($fakeprograma, $programa->id);
        $this->assertModelData($fakeprograma, $updatedprograma->toArray());
        $dbprograma = $this->programaRepo->find($programa->id);
        $this->assertModelData($fakeprograma, $dbprograma->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_programa()
    {
        $programa = $this->makeprograma();
        $resp = $this->programaRepo->delete($programa->id);
        $this->assertTrue($resp);
        $this->assertNull(programa::find($programa->id), 'programa should not exist in DB');
    }
}