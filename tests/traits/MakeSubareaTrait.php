<?php

use Faker\Factory as Faker;
use App\Models\Subarea;
use App\Repositories\SubareaRepository;

trait MakeSubareaTrait
{
    /**
     * Create fake instance of Subarea and save it in database
     *
     * @param array $subareaFields
     * @return Subarea
     */
    public function makeSubarea($subareaFields = [])
    {
        /** @var SubareaRepository $subareaRepo */
        $subareaRepo = App::make(SubareaRepository::class);
        $theme = $this->fakeSubareaData($subareaFields);
        return $subareaRepo->create($theme);
    }

    /**
     * Get fake instance of Subarea
     *
     * @param array $subareaFields
     * @return Subarea
     */
    public function fakeSubarea($subareaFields = [])
    {
        return new Subarea($this->fakeSubareaData($subareaFields));
    }

    /**
     * Get fake data of Subarea
     *
     * @param array $postFields
     * @return array
     */
    public function fakeSubareaData($subareaFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'subarea' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $subareaFields);
    }
}