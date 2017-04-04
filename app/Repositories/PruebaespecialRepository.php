<?php

namespace App\Repositories;

use App\Models\Pruebaespecial;
use InfyOm\Generator\Common\BaseRepository;

class PruebaespecialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        "textouno",
        "texto_tres",
        "numero_uno",
        "numero_dos",
        "fecha"
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pruebaespecial::class;
    }
}
