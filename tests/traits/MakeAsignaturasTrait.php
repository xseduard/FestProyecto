<?php

use Faker\Factory as Faker;
use App\Models\Asignaturas;
use App\Repositories\AsignaturasRepository;

trait MakeAsignaturasTrait
{
    /**
     * Create fake instance of Asignaturas and save it in database
     *
     * @param array $asignaturasFields
     * @return Asignaturas
     */
    public function makeAsignaturas($asignaturasFields = [])
    {
        /** @var AsignaturasRepository $asignaturasRepo */
        $asignaturasRepo = App::make(AsignaturasRepository::class);
        $theme = $this->fakeAsignaturasData($asignaturasFields);
        return $asignaturasRepo->create($theme);
    }

    /**
     * Get fake instance of Asignaturas
     *
     * @param array $asignaturasFields
     * @return Asignaturas
     */
    public function fakeAsignaturas($asignaturasFields = [])
    {
        return new Asignaturas($this->fakeAsignaturasData($asignaturasFields));
    }

    /**
     * Get fake data of Asignaturas
     *
     * @param array $postFields
     * @return array
     */
    public function fakeAsignaturasData($asignaturasFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'asignatura' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $asignaturasFields);
    }
}