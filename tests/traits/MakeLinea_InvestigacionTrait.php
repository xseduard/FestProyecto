<?php

use Faker\Factory as Faker;
use App\Models\Linea_Investigacion;
use App\Repositories\Linea_InvestigacionRepository;

trait MakeLinea_InvestigacionTrait
{
    /**
     * Create fake instance of Linea_Investigacion and save it in database
     *
     * @param array $lineaInvestigacionFields
     * @return Linea_Investigacion
     */
    public function makeLinea_Investigacion($lineaInvestigacionFields = [])
    {
        /** @var Linea_InvestigacionRepository $lineaInvestigacionRepo */
        $lineaInvestigacionRepo = App::make(Linea_InvestigacionRepository::class);
        $theme = $this->fakeLinea_InvestigacionData($lineaInvestigacionFields);
        return $lineaInvestigacionRepo->create($theme);
    }

    /**
     * Get fake instance of Linea_Investigacion
     *
     * @param array $lineaInvestigacionFields
     * @return Linea_Investigacion
     */
    public function fakeLinea_Investigacion($lineaInvestigacionFields = [])
    {
        return new Linea_Investigacion($this->fakeLinea_InvestigacionData($lineaInvestigacionFields));
    }

    /**
     * Get fake data of Linea_Investigacion
     *
     * @param array $postFields
     * @return array
     */
    public function fakeLinea_InvestigacionData($lineaInvestigacionFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombre' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $lineaInvestigacionFields);
    }
}