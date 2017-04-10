<?php

use Faker\Factory as Faker;
use App\Models\departamento;
use App\Repositories\departamentoRepository;

trait MakedepartamentoTrait
{
    /**
     * Create fake instance of departamento and save it in database
     *
     * @param array $departamentoFields
     * @return departamento
     */
    public function makedepartamento($departamentoFields = [])
    {
        /** @var departamentoRepository $departamentoRepo */
        $departamentoRepo = App::make(departamentoRepository::class);
        $theme = $this->fakedepartamentoData($departamentoFields);
        return $departamentoRepo->create($theme);
    }

    /**
     * Get fake instance of departamento
     *
     * @param array $departamentoFields
     * @return departamento
     */
    public function fakedepartamento($departamentoFields = [])
    {
        return new departamento($this->fakedepartamentoData($departamentoFields));
    }

    /**
     * Get fake data of departamento
     *
     * @param array $postFields
     * @return array
     */
    public function fakedepartamentoData($departamentoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombre' => $fake->word
        ], $departamentoFields);
    }
}