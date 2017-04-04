<?php

use App\Models\Semilleros;
use App\Repositories\SemillerosRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SemillerosRepositoryTest extends TestCase
{
    use MakeSemillerosTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var SemillerosRepository
     */
    protected $semillerosRepo;

    public function setUp()
    {
        parent::setUp();
        $this->semillerosRepo = App::make(SemillerosRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_semilleros()
    {
        $semilleros = $this->fakeSemillerosData();
        $createdSemilleros = $this->semillerosRepo->create($semilleros);
        $createdSemilleros = $createdSemilleros->toArray();
        $this->assertArrayHasKey('id', $createdSemilleros);
        $this->assertNotNull($createdSemilleros['id'], 'Created Semilleros must have id specified');
        $this->assertNotNull(Semilleros::find($createdSemilleros['id']), 'Semilleros with given id must be in DB');
        $this->assertModelData($semilleros, $createdSemilleros);
    }

    /**
     * @test read
     */
    function it_reads_semilleros()
    {
        $semilleros = $this->makeSemilleros();
        $dbSemilleros = $this->semillerosRepo->find($semilleros->id);
        $dbSemilleros = $dbSemilleros->toArray();
        $this->assertModelData($semilleros->toArray(), $dbSemilleros);
    }

    /**
     * @test update
     */
    function it_updates_semilleros()
    {
        $semilleros = $this->makeSemilleros();
        $fakeSemilleros = $this->fakeSemillerosData();
        $updatedSemilleros = $this->semillerosRepo->update($fakeSemilleros, $semilleros->id);
        $this->assertModelData($fakeSemilleros, $updatedSemilleros->toArray());
        $dbSemilleros = $this->semillerosRepo->find($semilleros->id);
        $this->assertModelData($fakeSemilleros, $dbSemilleros->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_semilleros()
    {
        $semilleros = $this->makeSemilleros();
        $resp = $this->semillerosRepo->delete($semilleros->id);
        $this->assertTrue($resp);
        $this->assertNull(Semilleros::find($semilleros->id), 'Semilleros should not exist in DB');
    }
}