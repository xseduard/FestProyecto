<?php

use Faker\Factory as Faker;
use App\Models\Areainvestigacion;
use App\Repositories\AreainvestigacionRepository;

trait MakeAreainvestigacionTrait
{
    /**
     * Create fake instance of Areainvestigacion and save it in database
     *
     * @param array $areainvestigacionFields
     * @return Areainvestigacion
     */
    public function makeAreainvestigacion($areainvestigacionFields = [])
    {
        /** @var AreainvestigacionRepository $areainvestigacionRepo */
        $areainvestigacionRepo = App::make(AreainvestigacionRepository::class);
        $theme = $this->fakeAreainvestigacionData($areainvestigacionFields);
        return $areainvestigacionRepo->create($theme);
    }

    /**
     * Get fake instance of Areainvestigacion
     *
     * @param array $areainvestigacionFields
     * @return Areainvestigacion
     */
    public function fakeAreainvestigacion($areainvestigacionFields = [])
    {
        return new Areainvestigacion($this->fakeAreainvestigacionData($areainvestigacionFields));
    }

    /**
     * Get fake data of Areainvestigacion
     *
     * @param array $postFields
     * @return array
     */
    public function fakeAreainvestigacionData($areainvestigacionFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'area' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $areainvestigacionFields);
    }
}