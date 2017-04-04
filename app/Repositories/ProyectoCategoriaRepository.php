<?php

namespace App\Repositories;

use App\Models\ProyectoCategoria;
use InfyOm\Generator\Common\BaseRepository;

class ProyectoCategoriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'categoria'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProyectoCategoria::class;
    }
}
