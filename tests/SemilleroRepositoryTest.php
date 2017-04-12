<?php

use App\Models\Semillero;
use App\Repositories\SemilleroRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SemilleroRepositoryTest extends TestCase
{
    use MakeSemilleroTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var SemilleroRepository
     */
    protected $semilleroRepo;

    public function setUp()
    {
        parent::setUp();
        $this->semilleroRepo = App::make(SemilleroRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_semillero()
    {
        $semillero = $this->fakeSemilleroData();
        $createdSemillero = $this->semilleroRepo->create($semillero);
        $createdSemillero = $createdSemillero->toArray();
        $this->assertArrayHasKey('id', $createdSemillero);
        $this->assertNotNull($createdSemillero['id'], 'Created Semillero must have id specified');
        $this->assertNotNull(Semillero::find($createdSemillero['id']), 'Semillero with given id must be in DB');
        $this->assertModelData($semillero, $createdSemillero);
    }

    /**
     * @test read
     */
    function it_reads_semilleros()
    {
        $semillero = $this->makeSemillero();
        $dbSemillero = $this->semilleroRepo->find($semillero->id);
        $dbSemillero = $dbSemillero->toArray();
        $this->assertModelData($semillero->toArray(), $dbSemillero);
    }

    /**
     * @test update
     */
    function it_updates_semillero()
    {
        $semillero = $this->makeSemillero();
        $fakeSemillero = $this->fakeSemilleroData();
        $updatedSemillero = $this->semilleroRepo->update($fakeSemillero, $semillero->id);
        $this->assertModelData($fakeSemillero, $updatedSemillero->toArray());
        $dbSemillero = $this->semilleroRepo->find($semillero->id);
        $this->assertModelData($fakeSemillero, $dbSemillero->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_semillero()
    {
        $semillero = $this->makeSemillero();
        $resp = $this->semilleroRepo->delete($semillero->id);
        $this->assertTrue($resp);
        $this->assertNull(Semillero::find($semillero->id), 'Semillero should not exist in DB');
    }
}