<?php

use Faker\Factory as Faker;
use App\Models\EventoExpo;
use App\Repositories\EventoExpoRepository;

trait MakeEventoExpoTrait
{
    /**
     * Create fake instance of EventoExpo and save it in database
     *
     * @param array $eventoExpoFields
     * @return EventoExpo
     */
    public function makeEventoExpo($eventoExpoFields = [])
    {
        /** @var EventoExpoRepository $eventoExpoRepo */
        $eventoExpoRepo = App::make(EventoExpoRepository::class);
        $theme = $this->fakeEventoExpoData($eventoExpoFields);
        return $eventoExpoRepo->create($theme);
    }

    /**
     * Get fake instance of EventoExpo
     *
     * @param array $eventoExpoFields
     * @return EventoExpo
     */
    public function fakeEventoExpo($eventoExpoFields = [])
    {
        return new EventoExpo($this->fakeEventoExpoData($eventoExpoFields));
    }

    /**
     * Get fake data of EventoExpo
     *
     * @param array $postFields
     * @return array
     */
    public function fakeEventoExpoData($eventoExpoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'grupojurado_id' => $fake->randomDigitNotNull,
            'nombre' => $fake->word,
            'direccion' => $fake->word,
            'informacion' => $fake->text,
            'user_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $eventoExpoFields);
    }
}