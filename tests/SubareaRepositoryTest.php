<?php

use App\Models\Subarea;
use App\Repositories\SubareaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SubareaRepositoryTest extends TestCase
{
    use MakeSubareaTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var SubareaRepository
     */
    protected $subareaRepo;

    public function setUp()
    {
        parent::setUp();
        $this->subareaRepo = App::make(SubareaRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_subarea()
    {
        $subarea = $this->fakeSubareaData();
        $createdSubarea = $this->subareaRepo->create($subarea);
        $createdSubarea = $createdSubarea->toArray();
        $this->assertArrayHasKey('id', $createdSubarea);
        $this->assertNotNull($createdSubarea['id'], 'Created Subarea must have id specified');
        $this->assertNotNull(Subarea::find($createdSubarea['id']), 'Subarea with given id must be in DB');
        $this->assertModelData($subarea, $createdSubarea);
    }

    /**
     * @test read
     */
    function it_reads_subareas()
    {
        $subarea = $this->makeSubarea();
        $dbSubarea = $this->subareaRepo->find($subarea->id);
        $dbSubarea = $dbSubarea->toArray();
        $this->assertModelData($subarea->toArray(), $dbSubarea);
    }

    /**
     * @test update
     */
    function it_updates_subarea()
    {
        $subarea = $this->makeSubarea();
        $fakeSubarea = $this->fakeSubareaData();
        $updatedSubarea = $this->subareaRepo->update($fakeSubarea, $subarea->id);
        $this->assertModelData($fakeSubarea, $updatedSubarea->toArray());
        $dbSubarea = $this->subareaRepo->find($subarea->id);
        $this->assertModelData($fakeSubarea, $dbSubarea->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_subarea()
    {
        $subarea = $this->makeSubarea();
        $resp = $this->subareaRepo->delete($subarea->id);
        $this->assertTrue($resp);
        $this->assertNull(Subarea::find($subarea->id), 'Subarea should not exist in DB');
    }
}