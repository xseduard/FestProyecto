<?php

use App\Models\Nodo;
use App\Repositories\NodoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NodoRepositoryTest extends TestCase
{
    use MakeNodoTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var NodoRepository
     */
    protected $nodoRepo;

    public function setUp()
    {
        parent::setUp();
        $this->nodoRepo = App::make(NodoRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_nodo()
    {
        $nodo = $this->fakeNodoData();
        $createdNodo = $this->nodoRepo->create($nodo);
        $createdNodo = $createdNodo->toArray();
        $this->assertArrayHasKey('id', $createdNodo);
        $this->assertNotNull($createdNodo['id'], 'Created Nodo must have id specified');
        $this->assertNotNull(Nodo::find($createdNodo['id']), 'Nodo with given id must be in DB');
        $this->assertModelData($nodo, $createdNodo);
    }

    /**
     * @test read
     */
    function it_reads_nodos()
    {
        $nodo = $this->makeNodo();
        $dbNodo = $this->nodoRepo->find($nodo->id);
        $dbNodo = $dbNodo->toArray();
        $this->assertModelData($nodo->toArray(), $dbNodo);
    }

    /**
     * @test update
     */
    function it_updates_nodo()
    {
        $nodo = $this->makeNodo();
        $fakeNodo = $this->fakeNodoData();
        $updatedNodo = $this->nodoRepo->update($fakeNodo, $nodo->id);
        $this->assertModelData($fakeNodo, $updatedNodo->toArray());
        $dbNodo = $this->nodoRepo->find($nodo->id);
        $this->assertModelData($fakeNodo, $dbNodo->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_nodo()
    {
        $nodo = $this->makeNodo();
        $resp = $this->nodoRepo->delete($nodo->id);
        $this->assertTrue($resp);
        $this->assertNull(Nodo::find($nodo->id), 'Nodo should not exist in DB');
    }
}