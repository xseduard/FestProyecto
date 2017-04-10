<?php

use Faker\Factory as Faker;
use App\Models\municipio;
use App\Repositories\municipioRepository;

trait MakemunicipioTrait
{
    /**
     * Create fake instance of municipio and save it in database
     *
     * @param array $municipioFields
     * @return municipio
     */
    public function makemunicipio($municipioFields = [])
    {
        /** @var municipioRepository $municipioRepo */
        $municipioRepo = App::make(municipioRepository::class);
        $theme = $this->fakemunicipioData($municipioFields);
        return $municipioRepo->create($theme);
    }

    /**
     * Get fake instance of municipio
     *
     * @param array $municipioFields
     * @return municipio
     */
    public function fakemunicipio($municipioFields = [])
    {
        return new municipio($this->fakemunicipioData($municipioFields));
    }

    /**
     * Get fake data of municipio
     *
     * @param array $postFields
     * @return array
     */
    public function fakemunicipioData($municipioFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombre' => $fake->word,
            'id_departamento' => $fake->word
        ], $municipioFields);
    }
}