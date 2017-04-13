<?php

use Faker\Factory as Faker;
use App\Models\Proyecto;
use App\Repositories\ProyectoRepository;

trait MakeProyectoTrait
{
    /**
     * Create fake instance of Proyecto and save it in database
     *
     * @param array $proyectoFields
     * @return Proyecto
     */
    public function makeProyecto($proyectoFields = [])
    {
        /** @var ProyectoRepository $proyectoRepo */
        $proyectoRepo = App::make(ProyectoRepository::class);
        $theme = $this->fakeProyectoData($proyectoFields);
        return $proyectoRepo->create($theme);
    }

    /**
     * Get fake instance of Proyecto
     *
     * @param array $proyectoFields
     * @return Proyecto
     */
    public function fakeProyecto($proyectoFields = [])
    {
        return new Proyecto($this->fakeProyectoData($proyectoFields));
    }

    /**
     * Get fake data of Proyecto
     *
     * @param array $postFields
     * @return array
     */
    public function fakeProyectoData($proyectoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'pais' => $fake->word,
            'universidad' => $fake->word,
            'regional_id' => $fake->randomDigitNotNull,
            'semillero_id' => $fake->randomDigitNotNull,
            'area_id' => $fake->randomDigitNotNull,
            'programa_id' => $fake->randomDigitNotNull,
            'user_id' => $fake->randomDigitNotNull,
            'estado_id' => $fake->randomDigitNotNull,
            'linea_id' => $fake->randomDigitNotNull,
            'proyecto_content_id' => $fake->randomDigitNotNull,
            'grupojurado_id' => $fake->randomDigitNotNull,
            'evento_expo_id' => $fake->randomDigitNotNull,
            'tipo' => $fake->word,
            'titulo' => $fake->word,
            'descripcion' => $fake->text,
            'progreso_estimado' => $fake->word,
            'boo_publicacion' => $fake->word,
            'detalles_publicacion' => $fake->text,
            'boo_solicitud_revision' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $proyectoFields);
    }
}