<?php

use App\Models\area;
use App\Repositories\areaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class areaRepositoryTest extends TestCase
{
    use MakeareaTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var areaRepository
     */
    protected $areaRepo;

    public function setUp()
    {
        parent::setUp();
        $this->areaRepo = App::make(areaRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_area()
    {
        $area = $this->fakeareaData();
        $createdarea = $this->areaRepo->create($area);
        $createdarea = $createdarea->toArray();
        $this->assertArrayHasKey('id', $createdarea);
        $this->assertNotNull($createdarea['id'], 'Created area must have id specified');
        $this->assertNotNull(area::find($createdarea['id']), 'area with given id must be in DB');
        $this->assertModelData($area, $createdarea);
    }

    /**
     * @test read
     */
    function it_reads_areas()
    {
        $area = $this->makearea();
        $dbarea = $this->areaRepo->find($area->id);
        $dbarea = $dbarea->toArray();
        $this->assertModelData($area->toArray(), $dbarea);
    }

    /**
     * @test update
     */
    function it_updates_area()
    {
        $area = $this->makearea();
        $fakearea = $this->fakeareaData();
        $updatedarea = $this->areaRepo->update($fakearea, $area->id);
        $this->assertModelData($fakearea, $updatedarea->toArray());
        $dbarea = $this->areaRepo->find($area->id);
        $this->assertModelData($fakearea, $dbarea->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_area()
    {
        $area = $this->makearea();
        $resp = $this->areaRepo->delete($area->id);
        $this->assertTrue($resp);
        $this->assertNull(area::find($area->id), 'area should not exist in DB');
    }
}