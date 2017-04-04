<?php

namespace App\Repositories;

use App\Models\EStudiantes;
use InfyOm\Generator\Common\BaseRepository;

class EStudiantesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_completo',
        'identificacion',
        'correo',
        'telefono'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return EStudiantes::class;
    }
}
