<?php

use Faker\Factory as Faker;
use App\Models\Grupo_Investigacion;
use App\Repositories\Grupo_InvestigacionRepository;

trait MakeGrupo_InvestigacionTrait
{
    /**
     * Create fake instance of Grupo_Investigacion and save it in database
     *
     * @param array $grupoInvestigacionFields
     * @return Grupo_Investigacion
     */
    public function makeGrupo_Investigacion($grupoInvestigacionFields = [])
    {
        /** @var Grupo_InvestigacionRepository $grupoInvestigacionRepo */
        $grupoInvestigacionRepo = App::make(Grupo_InvestigacionRepository::class);
        $theme = $this->fakeGrupo_InvestigacionData($grupoInvestigacionFields);
        return $grupoInvestigacionRepo->create($theme);
    }

    /**
     * Get fake instance of Grupo_Investigacion
     *
     * @param array $grupoInvestigacionFields
     * @return Grupo_Investigacion
     */
    public function fakeGrupo_Investigacion($grupoInvestigacionFields = [])
    {
        return new Grupo_Investigacion($this->fakeGrupo_InvestigacionData($grupoInvestigacionFields));
    }

    /**
     * Get fake data of Grupo_Investigacion
     *
     * @param array $postFields
     * @return array
     */
    public function fakeGrupo_InvestigacionData($grupoInvestigacionFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombre' => $fake->word,
            'año_formacion' => $fake->word,
            'gran_area' => $fake->word,
            'area_conocimiento' => $fake->word,
            'cedula_primer_lider' => $fake->word,
            'nombre_primer_lider' => $fake->word,
            'cedula_segundo_lider' => $fake->word,
            'nombre_segundo_lider' => $fake->word,
            'grupLAC' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $grupoInvestigacionFields);
    }
}