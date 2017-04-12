<?php

use App\Models\Linea_Investigacion;
use App\Repositories\Linea_InvestigacionRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class Linea_InvestigacionRepositoryTest extends TestCase
{
    use MakeLinea_InvestigacionTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var Linea_InvestigacionRepository
     */
    protected $lineaInvestigacionRepo;

    public function setUp()
    {
        parent::setUp();
        $this->lineaInvestigacionRepo = App::make(Linea_InvestigacionRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_linea__investigacion()
    {
        $lineaInvestigacion = $this->fakeLinea_InvestigacionData();
        $createdLinea_Investigacion = $this->lineaInvestigacionRepo->create($lineaInvestigacion);
        $createdLinea_Investigacion = $createdLinea_Investigacion->toArray();
        $this->assertArrayHasKey('id', $createdLinea_Investigacion);
        $this->assertNotNull($createdLinea_Investigacion['id'], 'Created Linea_Investigacion must have id specified');
        $this->assertNotNull(Linea_Investigacion::find($createdLinea_Investigacion['id']), 'Linea_Investigacion with given id must be in DB');
        $this->assertModelData($lineaInvestigacion, $createdLinea_Investigacion);
    }

    /**
     * @test read
     */
    function it_reads_linea__investigacions()
    {
        $lineaInvestigacion = $this->makeLinea_Investigacion();
        $dbLinea_Investigacion = $this->lineaInvestigacionRepo->find($lineaInvestigacion->id);
        $dbLinea_Investigacion = $dbLinea_Investigacion->toArray();
        $this->assertModelData($lineaInvestigacion->toArray(), $dbLinea_Investigacion);
    }

    /**
     * @test update
     */
    function it_updates_linea__investigacion()
    {
        $lineaInvestigacion = $this->makeLinea_Investigacion();
        $fakeLinea_Investigacion = $this->fakeLinea_InvestigacionData();
        $updatedLinea_Investigacion = $this->lineaInvestigacionRepo->update($fakeLinea_Investigacion, $lineaInvestigacion->id);
        $this->assertModelData($fakeLinea_Investigacion, $updatedLinea_Investigacion->toArray());
        $dbLinea_Investigacion = $this->lineaInvestigacionRepo->find($lineaInvestigacion->id);
        $this->assertModelData($fakeLinea_Investigacion, $dbLinea_Investigacion->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_linea__investigacion()
    {
        $lineaInvestigacion = $this->makeLinea_Investigacion();
        $resp = $this->lineaInvestigacionRepo->delete($lineaInvestigacion->id);
        $this->assertTrue($resp);
        $this->assertNull(Linea_Investigacion::find($lineaInvestigacion->id), 'Linea_Investigacion should not exist in DB');
    }
}