<?php

use Faker\Factory as Faker;
use App\Models\ProyectoCategoria;
use App\Repositories\ProyectoCategoriaRepository;

trait MakeProyectoCategoriaTrait
{
    /**
     * Create fake instance of ProyectoCategoria and save it in database
     *
     * @param array $proyectoCategoriaFields
     * @return ProyectoCategoria
     */
    public function makeProyectoCategoria($proyectoCategoriaFields = [])
    {
        /** @var ProyectoCategoriaRepository $proyectoCategoriaRepo */
        $proyectoCategoriaRepo = App::make(ProyectoCategoriaRepository::class);
        $theme = $this->fakeProyectoCategoriaData($proyectoCategoriaFields);
        return $proyectoCategoriaRepo->create($theme);
    }

    /**
     * Get fake instance of ProyectoCategoria
     *
     * @param array $proyectoCategoriaFields
     * @return ProyectoCategoria
     */
    public function fakeProyectoCategoria($proyectoCategoriaFields = [])
    {
        return new ProyectoCategoria($this->fakeProyectoCategoriaData($proyectoCategoriaFields));
    }

    /**
     * Get fake data of ProyectoCategoria
     *
     * @param array $postFields
     * @return array
     */
    public function fakeProyectoCategoriaData($proyectoCategoriaFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'categoria' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $proyectoCategoriaFields);
    }
}