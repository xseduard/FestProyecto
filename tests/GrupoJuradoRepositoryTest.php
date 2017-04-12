<?php

use App\Models\GrupoJurado;
use App\Repositories\GrupoJuradoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GrupoJuradoRepositoryTest extends TestCase
{
    use MakeGrupoJuradoTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var GrupoJuradoRepository
     */
    protected $grupoJuradoRepo;

    public function setUp()
    {
        parent::setUp();
        $this->grupoJuradoRepo = App::make(GrupoJuradoRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_grupo_jurado()
    {
        $grupoJurado = $this->fakeGrupoJuradoData();
        $createdGrupoJurado = $this->grupoJuradoRepo->create($grupoJurado);
        $createdGrupoJurado = $createdGrupoJurado->toArray();
        $this->assertArrayHasKey('id', $createdGrupoJurado);
        $this->assertNotNull($createdGrupoJurado['id'], 'Created GrupoJurado must have id specified');
        $this->assertNotNull(GrupoJurado::find($createdGrupoJurado['id']), 'GrupoJurado with given id must be in DB');
        $this->assertModelData($grupoJurado, $createdGrupoJurado);
    }

    /**
     * @test read
     */
    function it_reads_grupo_jurados()
    {
        $grupoJurado = $this->makeGrupoJurado();
        $dbGrupoJurado = $this->grupoJuradoRepo->find($grupoJurado->id);
        $dbGrupoJurado = $dbGrupoJurado->toArray();
        $this->assertModelData($grupoJurado->toArray(), $dbGrupoJurado);
    }

    /**
     * @test update
     */
    function it_updates_grupo_jurado()
    {
        $grupoJurado = $this->makeGrupoJurado();
        $fakeGrupoJurado = $this->fakeGrupoJuradoData();
        $updatedGrupoJurado = $this->grupoJuradoRepo->update($fakeGrupoJurado, $grupoJurado->id);
        $this->assertModelData($fakeGrupoJurado, $updatedGrupoJurado->toArray());
        $dbGrupoJurado = $this->grupoJuradoRepo->find($grupoJurado->id);
        $this->assertModelData($fakeGrupoJurado, $dbGrupoJurado->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_grupo_jurado()
    {
        $grupoJurado = $this->makeGrupoJurado();
        $resp = $this->grupoJuradoRepo->delete($grupoJurado->id);
        $this->assertTrue($resp);
        $this->assertNull(GrupoJurado::find($grupoJurado->id), 'GrupoJurado should not exist in DB');
    }
}