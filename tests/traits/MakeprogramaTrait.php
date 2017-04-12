<?php

use Faker\Factory as Faker;
use App\Models\programa;
use App\Repositories\programaRepository;

trait MakeprogramaTrait
{
    /**
     * Create fake instance of programa and save it in database
     *
     * @param array $programaFields
     * @return programa
     */
    public function makeprograma($programaFields = [])
    {
        /** @var programaRepository $programaRepo */
        $programaRepo = App::make(programaRepository::class);
        $theme = $this->fakeprogramaData($programaFields);
        return $programaRepo->create($theme);
    }

    /**
     * Get fake instance of programa
     *
     * @param array $programaFields
     * @return programa
     */
    public function fakeprograma($programaFields = [])
    {
        return new programa($this->fakeprogramaData($programaFields));
    }

    /**
     * Get fake data of programa
     *
     * @param array $postFields
     * @return array
     */
    public function fakeprogramaData($programaFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombre' => $fake->word,
            'modalidad' => $fake->word,
            'area_id' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $programaFields);
    }
}