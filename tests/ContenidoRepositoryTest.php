<?php

use App\Models\Contenido;
use App\Repositories\ContenidoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContenidoRepositoryTest extends TestCase
{
    use MakeContenidoTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ContenidoRepository
     */
    protected $contenidoRepo;

    public function setUp()
    {
        parent::setUp();
        $this->contenidoRepo = App::make(ContenidoRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_contenido()
    {
        $contenido = $this->fakeContenidoData();
        $createdContenido = $this->contenidoRepo->create($contenido);
        $createdContenido = $createdContenido->toArray();
        $this->assertArrayHasKey('id', $createdContenido);
        $this->assertNotNull($createdContenido['id'], 'Created Contenido must have id specified');
        $this->assertNotNull(Contenido::find($createdContenido['id']), 'Contenido with given id must be in DB');
        $this->assertModelData($contenido, $createdContenido);
    }

    /**
     * @test read
     */
    function it_reads_contenidos()
    {
        $contenido = $this->makeContenido();
        $dbContenido = $this->contenidoRepo->find($contenido->id);
        $dbContenido = $dbContenido->toArray();
        $this->assertModelData($contenido->toArray(), $dbContenido);
    }

    /**
     * @test update
     */
    function it_updates_contenido()
    {
        $contenido = $this->makeContenido();
        $fakeContenido = $this->fakeContenidoData();
        $updatedContenido = $this->contenidoRepo->update($fakeContenido, $contenido->id);
        $this->assertModelData($fakeContenido, $updatedContenido->toArray());
        $dbContenido = $this->contenidoRepo->find($contenido->id);
        $this->assertModelData($fakeContenido, $dbContenido->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_contenido()
    {
        $contenido = $this->makeContenido();
        $resp = $this->contenidoRepo->delete($contenido->id);
        $this->assertTrue($resp);
        $this->assertNull(Contenido::find($contenido->id), 'Contenido should not exist in DB');
    }
}