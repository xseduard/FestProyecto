<?php

use Faker\Factory as Faker;
use App\Models\Semillero;
use App\Repositories\SemilleroRepository;

trait MakeSemilleroTrait
{
    /**
     * Create fake instance of Semillero and save it in database
     *
     * @param array $semilleroFields
     * @return Semillero
     */
    public function makeSemillero($semilleroFields = [])
    {
        /** @var SemilleroRepository $semilleroRepo */
        $semilleroRepo = App::make(SemilleroRepository::class);
        $theme = $this->fakeSemilleroData($semilleroFields);
        return $semilleroRepo->create($theme);
    }

    /**
     * Get fake instance of Semillero
     *
     * @param array $semilleroFields
     * @return Semillero
     */
    public function fakeSemillero($semilleroFields = [])
    {
        return new Semillero($this->fakeSemilleroData($semilleroFields));
    }

    /**
     * Get fake data of Semillero
     *
     * @param array $postFields
     * @return array
     */
    public function fakeSemilleroData($semilleroFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombre' => $fake->word,
            'director_id' => $fake->randomDigitNotNull,
            'coordinador_id' => $fake->randomDigitNotNull,
            'estudiante_lider_id' => $fake->randomDigitNotNull,
            'regional_id' => $fake->randomDigitNotNull,
            'grupo_investigacion_id' => $fake->randomDigitNotNull,
            'informacion' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $semilleroFields);
    }
}