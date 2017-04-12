<?php

use Faker\Factory as Faker;
use App\Models\area;
use App\Repositories\areaRepository;

trait MakeareaTrait
{
    /**
     * Create fake instance of area and save it in database
     *
     * @param array $areaFields
     * @return area
     */
    public function makearea($areaFields = [])
    {
        /** @var areaRepository $areaRepo */
        $areaRepo = App::make(areaRepository::class);
        $theme = $this->fakeareaData($areaFields);
        return $areaRepo->create($theme);
    }

    /**
     * Get fake instance of area
     *
     * @param array $areaFields
     * @return area
     */
    public function fakearea($areaFields = [])
    {
        return new area($this->fakeareaData($areaFields));
    }

    /**
     * Get fake data of area
     *
     * @param array $postFields
     * @return array
     */
    public function fakeareaData($areaFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombre' => $fake->word,
            'decano' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $areaFields);
    }
}