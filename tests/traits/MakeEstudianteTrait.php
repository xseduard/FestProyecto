<?php

use Faker\Factory as Faker;
use App\Models\Estudiante;
use App\Repositories\EstudianteRepository;

trait MakeEstudianteTrait
{
    /**
     * Create fake instance of Estudiante and save it in database
     *
     * @param array $estudianteFields
     * @return Estudiante
     */
    public function makeEstudiante($estudianteFields = [])
    {
        /** @var EstudianteRepository $estudianteRepo */
        $estudianteRepo = App::make(EstudianteRepository::class);
        $theme = $this->fakeEstudianteData($estudianteFields);
        return $estudianteRepo->create($theme);
    }

    /**
     * Get fake instance of Estudiante
     *
     * @param array $estudianteFields
     * @return Estudiante
     */
    public function fakeEstudiante($estudianteFields = [])
    {
        return new Estudiante($this->fakeEstudianteData($estudianteFields));
    }

    /**
     * Get fake data of Estudiante
     *
     * @param array $postFields
     * @return array
     */
    public function fakeEstudianteData($estudianteFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombres' => $fake->word,
            'apellidos' => $fake->word,
            'cedula' => $fake->word,
            'area_id' => $fake->randomDigitNotNull,
            'programa_id' => $fake->randomDigitNotNull,
            'regional_id' => $fake->randomDigitNotNull,
            'genero' => $fake->word,
            'pensum' => $fake->word,
            'semetre' => $fake->word,
            'correo_principal' => $fake->word,
            'correo_institucional' => $fake->word,
            'celular' => $fake->word,
            'telefono' => $fake->word,
            'fecha_nacimiento' => $fake->word,
            'expedicion_documento' => $fake->word,
            'nacionalidad' => $fake->word,
            'wp' => $fake->word,
            'skype' => $fake->word,
            'linkedin' => $fake->word,
            'twitter' => $fake->word,
            'estado_civil' => $fake->word,
            'estado' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $estudianteFields);
    }
}