<?php

use Faker\Factory as Faker;
use App\Models\Titulo;
use App\Repositories\TituloRepository;

trait MakeTituloTrait
{
    /**
     * Create fake instance of Titulo and save it in database
     *
     * @param array $tituloFields
     * @return Titulo
     */
    public function makeTitulo($tituloFields = [])
    {
        /** @var TituloRepository $tituloRepo */
        $tituloRepo = App::make(TituloRepository::class);
        $theme = $this->fakeTituloData($tituloFields);
        return $tituloRepo->create($theme);
    }

    /**
     * Get fake instance of Titulo
     *
     * @param array $tituloFields
     * @return Titulo
     */
    public function fakeTitulo($tituloFields = [])
    {
        return new Titulo($this->fakeTituloData($tituloFields));
    }

    /**
     * Get fake data of Titulo
     *
     * @param array $postFields
     * @return array
     */
    public function fakeTituloData($tituloFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'titulo' => $fake->word,
            'capitulo' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $tituloFields);
    }
}