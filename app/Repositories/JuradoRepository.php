<?php

namespace App\Repositories;

use App\Models\Jurado;
use InfyOm\Generator\Common\BaseRepository;

class JuradoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombres',
        'apellidos',
        'cedula',
        'grupojurado_id',
        'user_id',
        'linea_investigacion_id',
        'area_id',
        'celular',
        'direccion',
        'correo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Jurado::class;
    }
}
