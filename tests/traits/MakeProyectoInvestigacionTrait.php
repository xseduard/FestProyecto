<?php

use Faker\Factory as Faker;
use App\Models\ProyectoInvestigacion;
use App\Repositories\ProyectoInvestigacionRepository;

trait MakeProyectoInvestigacionTrait
{
    /**
     * Create fake instance of ProyectoInvestigacion and save it in database
     *
     * @param array $proyectoInvestigacionFields
     * @return ProyectoInvestigacion
     */
    public function makeProyectoInvestigacion($proyectoInvestigacionFields = [])
    {
        /** @var ProyectoInvestigacionRepository $proyectoInvestigacionRepo */
        $proyectoInvestigacionRepo = App::make(ProyectoInvestigacionRepository::class);
        $theme = $this->fakeProyectoInvestigacionData($proyectoInvestigacionFields);
        return $proyectoInvestigacionRepo->create($theme);
    }

    /**
     * Get fake instance of ProyectoInvestigacion
     *
     * @param array $proyectoInvestigacionFields
     * @return ProyectoInvestigacion
     */
    public function fakeProyectoInvestigacion($proyectoInvestigacionFields = [])
    {
        return new ProyectoInvestigacion($this->fakeProyectoInvestigacionData($proyectoInvestigacionFields));
    }

    /**
     * Get fake data of ProyectoInvestigacion
     *
     * @param array $postFields
     * @return array
     */
    public function fakeProyectoInvestigacionData($proyectoInvestigacionFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'pais' => $fake->randomDigitNotNull,
            'nodo' => $fake->randomDigitNotNull,
            'universidad' => $fake->randomDigitNotNull,
            'semillero' => $fake->randomDigitNotNull,
            'ponente' => $fake->randomDigitNotNull,
            'categoria' => $fake->word,
            'titulo' => $fake->word,
            'introduccion' => $fake->word,
            'problema_justificacion' => $fake->word,
            'objetivo_general' => $fake->word,
            'objetivo_especifico' => $fake->word,
            'referente_teorico' => $fake->word,
            'metodologia' => $fake->word,
            'conclusion' => $fake->word,
            'bibliografia' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $proyectoInvestigacionFields);
    }
}