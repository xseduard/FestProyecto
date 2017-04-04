<?php

use App\Models\EStudiantes;
use App\Repositories\EStudiantesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EStudiantesRepositoryTest extends TestCase
{
    use MakeEStudiantesTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var EStudiantesRepository
     */
    protected $eStudiantesRepo;

    public function setUp()
    {
        parent::setUp();
        $this->eStudiantesRepo = App::make(EStudiantesRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_e_studiantes()
    {
        $eStudiantes = $this->fakeEStudiantesData();
        $createdEStudiantes = $this->eStudiantesRepo->create($eStudiantes);
        $createdEStudiantes = $createdEStudiantes->toArray();
        $this->assertArrayHasKey('id', $createdEStudiantes);
        $this->assertNotNull($createdEStudiantes['id'], 'Created EStudiantes must have id specified');
        $this->assertNotNull(EStudiantes::find($createdEStudiantes['id']), 'EStudiantes with given id must be in DB');
        $this->assertModelData($eStudiantes, $createdEStudiantes);
    }

    /**
     * @test read
     */
    function it_reads_e_studiantes()
    {
        $eStudiantes = $this->makeEStudiantes();
        $dbEStudiantes = $this->eStudiantesRepo->find($eStudiantes->id);
        $dbEStudiantes = $dbEStudiantes->toArray();
        $this->assertModelData($eStudiantes->toArray(), $dbEStudiantes);
    }

    /**
     * @test update
     */
    function it_updates_e_studiantes()
    {
        $eStudiantes = $this->makeEStudiantes();
        $fakeEStudiantes = $this->fakeEStudiantesData();
        $updatedEStudiantes = $this->eStudiantesRepo->update($fakeEStudiantes, $eStudiantes->id);
        $this->assertModelData($fakeEStudiantes, $updatedEStudiantes->toArray());
        $dbEStudiantes = $this->eStudiantesRepo->find($eStudiantes->id);
        $this->assertModelData($fakeEStudiantes, $dbEStudiantes->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_e_studiantes()
    {
        $eStudiantes = $this->makeEStudiantes();
        $resp = $this->eStudiantesRepo->delete($eStudiantes->id);
        $this->assertTrue($resp);
        $this->assertNull(EStudiantes::find($eStudiantes->id), 'EStudiantes should not exist in DB');
    }
}