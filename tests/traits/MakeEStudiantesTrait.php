<?php

use Faker\Factory as Faker;
use App\Models\EStudiantes;
use App\Repositories\EStudiantesRepository;

trait MakeEStudiantesTrait
{
    /**
     * Create fake instance of EStudiantes and save it in database
     *
     * @param array $eStudiantesFields
     * @return EStudiantes
     */
    public function makeEStudiantes($eStudiantesFields = [])
    {
        /** @var EStudiantesRepository $eStudiantesRepo */
        $eStudiantesRepo = App::make(EStudiantesRepository::class);
        $theme = $this->fakeEStudiantesData($eStudiantesFields);
        return $eStudiantesRepo->create($theme);
    }

    /**
     * Get fake instance of EStudiantes
     *
     * @param array $eStudiantesFields
     * @return EStudiantes
     */
    public function fakeEStudiantes($eStudiantesFields = [])
    {
        return new EStudiantes($this->fakeEStudiantesData($eStudiantesFields));
    }

    /**
     * Get fake data of EStudiantes
     *
     * @param array $postFields
     * @return array
     */
    public function fakeEStudiantesData($eStudiantesFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombre_completo' => $fake->word,
            'identificacion' => $fake->word,
            'correo' => $fake->word,
            'telefono' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $eStudiantesFields);
    }
}