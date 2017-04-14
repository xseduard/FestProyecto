<?php

use Faker\Factory as Faker;
use App\Models\Nota;
use App\Repositories\NotaRepository;

trait MakeNotaTrait
{
    /**
     * Create fake instance of Nota and save it in database
     *
     * @param array $notaFields
     * @return Nota
     */
    public function makeNota($notaFields = [])
    {
        /** @var NotaRepository $notaRepo */
        $notaRepo = App::make(NotaRepository::class);
        $theme = $this->fakeNotaData($notaFields);
        return $notaRepo->create($theme);
    }

    /**
     * Get fake instance of Nota
     *
     * @param array $notaFields
     * @return Nota
     */
    public function fakeNota($notaFields = [])
    {
        return new Nota($this->fakeNotaData($notaFields));
    }

    /**
     * Get fake data of Nota
     *
     * @param array $postFields
     * @return array
     */
    public function fakeNotaData($notaFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'tipo' => $fake->word,
            'user_id' => $fake->randomDigitNotNull,
            'proyecto_id' => $fake->randomDigitNotNull,
            'nota' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $notaFields);
    }
}