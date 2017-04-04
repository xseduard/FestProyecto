<?php

use Faker\Factory as Faker;
use App\Models\Semilleros;
use App\Repositories\SemillerosRepository;

trait MakeSemillerosTrait
{
    /**
     * Create fake instance of Semilleros and save it in database
     *
     * @param array $semillerosFields
     * @return Semilleros
     */
    public function makeSemilleros($semillerosFields = [])
    {
        /** @var SemillerosRepository $semillerosRepo */
        $semillerosRepo = App::make(SemillerosRepository::class);
        $theme = $this->fakeSemillerosData($semillerosFields);
        return $semillerosRepo->create($theme);
    }

    /**
     * Get fake instance of Semilleros
     *
     * @param array $semillerosFields
     * @return Semilleros
     */
    public function fakeSemilleros($semillerosFields = [])
    {
        return new Semilleros($this->fakeSemillerosData($semillerosFields));
    }

    /**
     * Get fake data of Semilleros
     *
     * @param array $postFields
     * @return array
     */
    public function fakeSemillerosData($semillerosFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombre' => $fake->word,
            'facultad' => $fake->word,
            'grupo_de_investigacion' => $fake->word,
            'fecha_de_creacion' => $fake->word,
            'docente_asesor' => $fake->word,
            'estudiante_lider' => $fake->word,
            'programa' => $fake->word,
            'code_miembros' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $semillerosFields);
    }
}