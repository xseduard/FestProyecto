<?php

namespace App\Repositories;

use App\Models\Sede;
use InfyOm\Generator\Common\BaseRepository;

class SedeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'direccion',
        'telefono',
        'info',
        'municipio_id',
        'regional_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Sede::class;
    }
}
