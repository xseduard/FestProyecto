<?php

use Faker\Factory as Faker;
use App\Models\Nodo;
use App\Repositories\NodoRepository;

trait MakeNodoTrait
{
    /**
     * Create fake instance of Nodo and save it in database
     *
     * @param array $nodoFields
     * @return Nodo
     */
    public function makeNodo($nodoFields = [])
    {
        /** @var NodoRepository $nodoRepo */
        $nodoRepo = App::make(NodoRepository::class);
        $theme = $this->fakeNodoData($nodoFields);
        return $nodoRepo->create($theme);
    }

    /**
     * Get fake instance of Nodo
     *
     * @param array $nodoFields
     * @return Nodo
     */
    public function fakeNodo($nodoFields = [])
    {
        return new Nodo($this->fakeNodoData($nodoFields));
    }

    /**
     * Get fake data of Nodo
     *
     * @param array $postFields
     * @return array
     */
    public function fakeNodoData($nodoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nodo' => $fake->word
        ], $nodoFields);
    }
}