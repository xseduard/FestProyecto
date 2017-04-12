<?php

use App\Models\Regional;
use App\Repositories\RegionalRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegionalRepositoryTest extends TestCase
{
    use MakeRegionalTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var RegionalRepository
     */
    protected $regionalRepo;

    public function setUp()
    {
        parent::setUp();
        $this->regionalRepo = App::make(RegionalRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_regional()
    {
        $regional = $this->fakeRegionalData();
        $createdRegional = $this->regionalRepo->create($regional);
        $createdRegional = $createdRegional->toArray();
        $this->assertArrayHasKey('id', $createdRegional);
        $this->assertNotNull($createdRegional['id'], 'Created Regional must have id specified');
        $this->assertNotNull(Regional::find($createdRegional['id']), 'Regional with given id must be in DB');
        $this->assertModelData($regional, $createdRegional);
    }

    /**
     * @test read
     */
    function it_reads_regionals()
    {
        $regional = $this->makeRegional();
        $dbRegional = $this->regionalRepo->find($regional->id);
        $dbRegional = $dbRegional->toArray();
        $this->assertModelData($regional->toArray(), $dbRegional);
    }

    /**
     * @test update
     */
    function it_updates_regional()
    {
        $regional = $this->makeRegional();
        $fakeRegional = $this->fakeRegionalData();
        $updatedRegional = $this->regionalRepo->update($fakeRegional, $regional->id);
        $this->assertModelData($fakeRegional, $updatedRegional->toArray());
        $dbRegional = $this->regionalRepo->find($regional->id);
        $this->assertModelData($fakeRegional, $dbRegional->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_regional()
    {
        $regional = $this->makeRegional();
        $resp = $this->regionalRepo->delete($regional->id);
        $this->assertTrue($resp);
        $this->assertNull(Regional::find($regional->id), 'Regional should not exist in DB');
    }
}