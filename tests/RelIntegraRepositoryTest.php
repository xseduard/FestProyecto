<?php

use App\Models\RelIntegra;
use App\Repositories\RelIntegraRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RelIntegraRepositoryTest extends TestCase
{
    use MakeRelIntegraTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var RelIntegraRepository
     */
    protected $relIntegraRepo;

    public function setUp()
    {
        parent::setUp();
        $this->relIntegraRepo = App::make(RelIntegraRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_rel_integra()
    {
        $relIntegra = $this->fakeRelIntegraData();
        $createdRelIntegra = $this->relIntegraRepo->create($relIntegra);
        $createdRelIntegra = $createdRelIntegra->toArray();
        $this->assertArrayHasKey('id', $createdRelIntegra);
        $this->assertNotNull($createdRelIntegra['id'], 'Created RelIntegra must have id specified');
        $this->assertNotNull(RelIntegra::find($createdRelIntegra['id']), 'RelIntegra with given id must be in DB');
        $this->assertModelData($relIntegra, $createdRelIntegra);
    }

    /**
     * @test read
     */
    function it_reads_rel_integras()
    {
        $relIntegra = $this->makeRelIntegra();
        $dbRelIntegra = $this->relIntegraRepo->find($relIntegra->id);
        $dbRelIntegra = $dbRelIntegra->toArray();
        $this->assertModelData($relIntegra->toArray(), $dbRelIntegra);
    }

    /**
     * @test update
     */
    function it_updates_rel_integra()
    {
        $relIntegra = $this->makeRelIntegra();
        $fakeRelIntegra = $this->fakeRelIntegraData();
        $updatedRelIntegra = $this->relIntegraRepo->update($fakeRelIntegra, $relIntegra->id);
        $this->assertModelData($fakeRelIntegra, $updatedRelIntegra->toArray());
        $dbRelIntegra = $this->relIntegraRepo->find($relIntegra->id);
        $this->assertModelData($fakeRelIntegra, $dbRelIntegra->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_rel_integra()
    {
        $relIntegra = $this->makeRelIntegra();
        $resp = $this->relIntegraRepo->delete($relIntegra->id);
        $this->assertTrue($resp);
        $this->assertNull(RelIntegra::find($relIntegra->id), 'RelIntegra should not exist in DB');
    }
}