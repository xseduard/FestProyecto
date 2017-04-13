<?php

namespace App\Repositories;

use App\Models\Proyecto;
use InfyOm\Generator\Common\BaseRepository;

class ProyectoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'regional_id',
        'semillero_id',
        'area_id',
        'programa_id',
        'user_id',
        'linea_id',
        'tipo',
        'titulo',
        'detalles_publicacion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Proyecto::class;
    }
}
