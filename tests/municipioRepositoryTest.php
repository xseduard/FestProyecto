<?php

use App\Models\municipio;
use App\Repositories\municipioRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class municipioRepositoryTest extends TestCase
{
    use MakemunicipioTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var municipioRepository
     */
    protected $municipioRepo;

    public function setUp()
    {
        parent::setUp();
        $this->municipioRepo = App::make(municipioRepository::class);
    }

    /**
     * @test create
     */
    function it_creates_municipio()
    {
        $municipio = $this->fakemunicipioData();
        $createdmunicipio = $this->municipioRepo->create($municipio);
        $createdmunicipio = $createdmunicipio->toArray();
        $this->assertArrayHasKey('id', $createdmunicipio);
        $this->assertNotNull($createdmunicipio['id'], 'Created municipio must have id specified');
        $this->assertNotNull(municipio::find($createdmunicipio['id']), 'municipio with given id must be in DB');
        $this->assertModelData($municipio, $createdmunicipio);
    }

    /**
     * @test read
     */
    function it_reads_municipios()
    {
        $municipio = $this->makemunicipio();
        $dbmunicipio = $this->municipioRepo->find($municipio->id);
        $dbmunicipio = $dbmunicipio->toArray();
        $this->assertModelData($municipio->toArray(), $dbmunicipio);
    }

    /**
     * @test update
     */
    function it_updates_municipio()
    {
        $municipio = $this->makemunicipio();
        $fakemunicipio = $this->fakemunicipioData();
        $updatedmunicipio = $this->municipioRepo->update($fakemunicipio, $municipio->id);
        $this->assertModelData($fakemunicipio, $updatedmunicipio->toArray());
        $dbmunicipio = $this->municipioRepo->find($municipio->id);
        $this->assertModelData($fakemunicipio, $dbmunicipio->toArray());
    }

    /**
     * @test delete
     */
    function it_deletes_municipio()
    {
        $municipio = $this->makemunicipio();
        $resp = $this->municipioRepo->delete($municipio->id);
        $this->assertTrue($resp);
        $this->assertNull(municipio::find($municipio->id), 'municipio should not exist in DB');
    }
}