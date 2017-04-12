<?php

use Faker\Factory as Faker;
use App\Models\Regional;
use App\Repositories\RegionalRepository;

trait MakeRegionalTrait
{
    /**
     * Create fake instance of Regional and save it in database
     *
     * @param array $regionalFields
     * @return Regional
     */
    public function makeRegional($regionalFields = [])
    {
        /** @var RegionalRepository $regionalRepo */
        $regionalRepo = App::make(RegionalRepository::class);
        $theme = $this->fakeRegionalData($regionalFields);
        return $regionalRepo->create($theme);
    }

    /**
     * Get fake instance of Regional
     *
     * @param array $regionalFields
     * @return Regional
     */
    public function fakeRegional($regionalFields = [])
    {
        return new Regional($this->fakeRegionalData($regionalFields));
    }

    /**
     * Get fake data of Regional
     *
     * @param array $postFields
     * @return array
     */
    public function fakeRegionalData($regionalFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombre' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $regionalFields);
    }
}