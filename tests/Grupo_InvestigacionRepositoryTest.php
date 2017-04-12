<?php

use App\Models\Grupo_Investigacion;
use App\Repositories\Grupo_InvestigacionRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class Grupo_InvestigacionRepositoryTest extends TestCase
{
    use MakeGrupo_InvestigacionTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var Grupo_InvestigacionRepository
     */
    protected $grupoInvestigacionRepo;

    public function setUp()
    {
        parent::setUp();
        $this->grupoInvestigacionRepo = App::make(Grupo_InvestigacionRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_grupo__investigacion()
    {
        $grupoInvestigacion = $this->fakeGrupo_InvestigacionData();
        $createdGrupo_Investigacion = $this->grupoInvestigacionRepo->create($grupoInvestigacion);
        $createdGrupo_Investigacion = $createdGrupo_Investigacion->toArray();
        $this->assertArrayHasKey('id', $createdGrupo_Investigacion);
        $this->assertNotNull($createdGrupo_Investigacion['id'], 'Created Grupo_Investigacion must have id specified');
        $this->assertNotNull(Grupo_Investigacion::find($createdGrupo_Investigacion['id']), 'Grupo_Investigacion with given id must be in DB');
        $this->assertModelData($grupoInvestigacion, $createdGrupo_Investigacion);
    }

    /**
     * @test read
     */
    function it_reads_grupo__investigacions()
    {
        $grupoInvestigacion = $this->makeGrupo_Investigacion();
        $dbGrupo_Investigacion = $this->grupoInvestigacionRepo->find($grupoInvestigacion->id);
        $dbGrupo_Investigacion = $dbGrupo_Investigacion->toArray();
        $this->assertModelData($grupoInvestigacion->toArray(), $dbGrupo_Investigacion);
    }

    /**
     * @test update
     */
    function it_updates_grupo__investigacion()
    {
        $grupoInvestigacion = $this->makeGrupo_Investigacion();
        $fakeGrupo_Investigacion = $this->fakeGrupo_InvestigacionData();
        $updatedGrupo_Investigacion = $this->grupoInvestigacionRepo->update($fakeGrupo_Investigacion, $grupoInvestigacion->id);
        $this->assertModelData($fakeGrupo_Investigacion, $updatedGrupo_Investigacion->toArray());
        $dbGrupo_Investigacion = $this->grupoInvestigacionRepo->find($grupoInvestigacion->id);
        $this->assertModelData($fakeGrupo_Investigacion, $dbGrupo_Investigacion->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_grupo__investigacion()
    {
        $grupoInvestigacion = $this->makeGrupo_Investigacion();
        $resp = $this->grupoInvestigacionRepo->delete($grupoInvestigacion->id);
        $this->assertTrue($resp);
        $this->assertNull(Grupo_Investigacion::find($grupoInvestigacion->id), 'Grupo_Investigacion should not exist in DB');
    }
}