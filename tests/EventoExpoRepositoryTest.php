<?php

use App\Models\EventoExpo;
use App\Repositories\EventoExpoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EventoExpoRepositoryTest extends TestCase
{
    use MakeEventoExpoTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var EventoExpoRepository
     */
    protected $eventoExpoRepo;

    public function setUp()
    {
        parent::setUp();
        $this->eventoExpoRepo = App::make(EventoExpoRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_evento_expo()
    {
        $eventoExpo = $this->fakeEventoExpoData();
        $createdEventoExpo = $this->eventoExpoRepo->create($eventoExpo);
        $createdEventoExpo = $createdEventoExpo->toArray();
        $this->assertArrayHasKey('id', $createdEventoExpo);
        $this->assertNotNull($createdEventoExpo['id'], 'Created EventoExpo must have id specified');
        $this->assertNotNull(EventoExpo::find($createdEventoExpo['id']), 'EventoExpo with given id must be in DB');
        $this->assertModelData($eventoExpo, $createdEventoExpo);
    }

    /**
     * @test read
     */
    function it_reads_evento_expos()
    {
        $eventoExpo = $this->makeEventoExpo();
        $dbEventoExpo = $this->eventoExpoRepo->find($eventoExpo->id);
        $dbEventoExpo = $dbEventoExpo->toArray();
        $this->assertModelData($eventoExpo->toArray(), $dbEventoExpo);
    }

    /**
     * @test update
     */
    function it_updates_evento_expo()
    {
        $eventoExpo = $this->makeEventoExpo();
        $fakeEventoExpo = $this->fakeEventoExpoData();
        $updatedEventoExpo = $this->eventoExpoRepo->update($fakeEventoExpo, $eventoExpo->id);
        $this->assertModelData($fakeEventoExpo, $updatedEventoExpo->toArray());
        $dbEventoExpo = $this->eventoExpoRepo->find($eventoExpo->id);
        $this->assertModelData($fakeEventoExpo, $dbEventoExpo->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_evento_expo()
    {
        $eventoExpo = $this->makeEventoExpo();
        $resp = $this->eventoExpoRepo->delete($eventoExpo->id);
        $this->assertTrue($resp);
        $this->assertNull(EventoExpo::find($eventoExpo->id), 'EventoExpo should not exist in DB');
    }
}