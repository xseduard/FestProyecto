<?php

use Faker\Factory as Faker;
use App\Models\Contenido;
use App\Repositories\ContenidoRepository;

trait MakeContenidoTrait
{
    /**
     * Create fake instance of Contenido and save it in database
     *
     * @param array $contenidoFields
     * @return Contenido
     */
    public function makeContenido($contenidoFields = [])
    {
        /** @var ContenidoRepository $contenidoRepo */
        $contenidoRepo = App::make(ContenidoRepository::class);
        $theme = $this->fakeContenidoData($contenidoFields);
        return $contenidoRepo->create($theme);
    }

    /**
     * Get fake instance of Contenido
     *
     * @param array $contenidoFields
     * @return Contenido
     */
    public function fakeContenido($contenidoFields = [])
    {
        return new Contenido($this->fakeContenidoData($contenidoFields));
    }

    /**
     * Get fake data of Contenido
     *
     * @param array $postFields
     * @return array
     */
    public function fakeContenidoData($contenidoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'proyecto_id' => $fake->randomDigitNotNull,
            'a1' => $fake->text,
            'a2' => $fake->text,
            'a3' => $fake->text,
            'a4' => $fake->text,
            'a5' => $fake->text,
            'a6' => $fake->text,
            'a7' => $fake->text,
            'a8' => $fake->text,
            'a9' => $fake->text,
            'a10' => $fake->text,
            'a11' => $fake->text,
            'a12' => $fake->text,
            'a13' => $fake->text,
            'a14' => $fake->text,
            'a15' => $fake->text,
            'a16' => $fake->text,
            'a17' => $fake->text,
            'a18' => $fake->text,
            'a19' => $fake->text,
            'a20' => $fake->text,
            'a21' => $fake->text,
            'a22' => $fake->text,
            'a23' => $fake->text,
            'a24' => $fake->text,
            'a25' => $fake->text,
            'a26' => $fake->text,
            'a27' => $fake->text,
            'a28' => $fake->text,
            'a29' => $fake->text,
            'a30' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $contenidoFields);
    }
}