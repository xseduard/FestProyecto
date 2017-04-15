<?php

use Faker\Factory as Faker;
use App\Models\RelIntegra;
use App\Repositories\RelIntegraRepository;

trait MakeRelIntegraTrait
{
    /**
     * Create fake instance of RelIntegra and save it in database
     *
     * @param array $relIntegraFields
     * @return RelIntegra
     */
    public function makeRelIntegra($relIntegraFields = [])
    {
        /** @var RelIntegraRepository $relIntegraRepo */
        $relIntegraRepo = App::make(RelIntegraRepository::class);
        $theme = $this->fakeRelIntegraData($relIntegraFields);
        return $relIntegraRepo->create($theme);
    }

    /**
     * Get fake instance of RelIntegra
     *
     * @param array $relIntegraFields
     * @return RelIntegra
     */
    public function fakeRelIntegra($relIntegraFields = [])
    {
        return new RelIntegra($this->fakeRelIntegraData($relIntegraFields));
    }

    /**
     * Get fake data of RelIntegra
     *
     * @param array $postFields
     * @return array
     */
    public function fakeRelIntegraData($relIntegraFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'proyecto_id' => $fake->randomDigitNotNull,
            'estudiante_id' => $fake->randomDigitNotNull,
            'user_id' => $fake->randomDigitNotNull,
            'boo_ponente' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $relIntegraFields);
    }
}