<?php

use Faker\Factory as Faker;
use App\Models\Universidades;
use App\Repositories\UniversidadesRepository;

trait MakeUniversidadesTrait
{
    /**
     * Create fake instance of Universidades and save it in database
     *
     * @param array $universidadesFields
     * @return Universidades
     */
    public function makeUniversidades($universidadesFields = [])
    {
        /** @var UniversidadesRepository $universidadesRepo */
        $universidadesRepo = App::make(UniversidadesRepository::class);
        $theme = $this->fakeUniversidadesData($universidadesFields);
        return $universidadesRepo->create($theme);
    }

    /**
     * Get fake instance of Universidades
     *
     * @param array $universidadesFields
     * @return Universidades
     */
    public function fakeUniversidades($universidadesFields = [])
    {
        return new Universidades($this->fakeUniversidadesData($universidadesFields));
    }

    /**
     * Get fake data of Universidades
     *
     * @param array $postFields
     * @return array
     */
    public function fakeUniversidadesData($universidadesFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'universidad' => $fake->word,
            'telefonos' => $fake->word,
            'rector' => $fake->word,
            'tipo' => $fake->randomDigitNotNull,
            'direccion' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $universidadesFields);
    }
}