<?php

use App\Models\Titulo;
use App\Repositories\TituloRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TituloRepositoryTest extends TestCase
{
    use MakeTituloTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var TituloRepository
     */
    protected $tituloRepo;

    public function setUp()
    {
        parent::setUp();
        $this->tituloRepo = App::make(TituloRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_titulo()
    {
        $titulo = $this->fakeTituloData();
        $createdTitulo = $this->tituloRepo->create($titulo);
        $createdTitulo = $createdTitulo->toArray();
        $this->assertArrayHasKey('id', $createdTitulo);
        $this->assertNotNull($createdTitulo['id'], 'Created Titulo must have id specified');
        $this->assertNotNull(Titulo::find($createdTitulo['id']), 'Titulo with given id must be in DB');
        $this->assertModelData($titulo, $createdTitulo);
    }

    /**
     * @test read
     */
    function it_reads_titulos()
    {
        $titulo = $this->makeTitulo();
        $dbTitulo = $this->tituloRepo->find($titulo->id);
        $dbTitulo = $dbTitulo->toArray();
        $this->assertModelData($titulo->toArray(), $dbTitulo);
    }

    /**
     * @test update
     */
    function it_updates_titulo()
    {
        $titulo = $this->makeTitulo();
        $fakeTitulo = $this->fakeTituloData();
        $updatedTitulo = $this->tituloRepo->update($fakeTitulo, $titulo->id);
        $this->assertModelData($fakeTitulo, $updatedTitulo->toArray());
        $dbTitulo = $this->tituloRepo->find($titulo->id);
        $this->assertModelData($fakeTitulo, $dbTitulo->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_titulo()
    {
        $titulo = $this->makeTitulo();
        $resp = $this->tituloRepo->delete($titulo->id);
        $this->assertTrue($resp);
        $this->assertNull(Titulo::find($titulo->id), 'Titulo should not exist in DB');
    }
}