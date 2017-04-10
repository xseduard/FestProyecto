<?php

use App\Models\departamento;
use App\Repositories\departamentoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class departamentoRepositoryTest extends TestCase
{
    use MakedepartamentoTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var departamentoRepository
     */
    protected $departamentoRepo;

    public function setUp()
    {
        parent::setUp();
        $this->departamentoRepo = App::make(departamentoRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_departamento()
    {
        $departamento = $this->fakedepartamentoData();
        $createddepartamento = $this->departamentoRepo->create($departamento);
        $createddepartamento = $createddepartamento->toArray();
        $this->assertArrayHasKey('id', $createddepartamento);
        $this->assertNotNull($createddepartamento['id'], 'Created departamento must have id specified');
        $this->assertNotNull(departamento::find($createddepartamento['id']), 'departamento with given id must be in DB');
        $this->assertModelData($departamento, $createddepartamento);
    }

    /**
     * @test read
     */
    function it_reads_departamentos()
    {
        $departamento = $this->makedepartamento();
        $dbdepartamento = $this->departamentoRepo->find($departamento->id);
        $dbdepartamento = $dbdepartamento->toArray();
        $this->assertModelData($departamento->toArray(), $dbdepartamento);
    }

    /**
     * @test update
     */
    function it_updates_departamento()
    {
        $departamento = $this->makedepartamento();
        $fakedepartamento = $this->fakedepartamentoData();
        $updateddepartamento = $this->departamentoRepo->update($fakedepartamento, $departamento->id);
        $this->assertModelData($fakedepartamento, $updateddepartamento->toArray());
        $dbdepartamento = $this->departamentoRepo->find($departamento->id);
        $this->assertModelData($fakedepartamento, $dbdepartamento->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_departamento()
    {
        $departamento = $this->makedepartamento();
        $resp = $this->departamentoRepo->delete($departamento->id);
        $this->assertTrue($resp);
        $this->assertNull(departamento::find($departamento->id), 'departamento should not exist in DB');
    }
}