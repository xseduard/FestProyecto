<?php

use Faker\Factory as Faker;
use App\Models\Nivelformacion;
use App\Repositories\NivelformacionRepository;

trait MakeNivelformacionTrait
{
    /**
     * Create fake instance of Nivelformacion and save it in database
     *
     * @param array $nivelformacionFields
     * @return Nivelformacion
     */
    public function makeNivelformacion($nivelformacionFields = [])
    {
        /** @var NivelformacionRepository $nivelformacionRepo */
        $nivelformacionRepo = App::make(NivelformacionRepository::class);
        $theme = $this->fakeNivelformacionData($nivelformacionFields);
        return $nivelformacionRepo->create($theme);
    }

    /**
     * Get fake instance of Nivelformacion
     *
     * @param array $nivelformacionFields
     * @return Nivelformacion
     */
    public function fakeNivelformacion($nivelformacionFields = [])
    {
        return new Nivelformacion($this->fakeNivelformacionData($nivelformacionFields));
    }

    /**
     * Get fake data of Nivelformacion
     *
     * @param array $postFields
     * @return array
     */
    public function fakeNivelformacionData($nivelformacionFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nivel' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $nivelformacionFields);
    }
}