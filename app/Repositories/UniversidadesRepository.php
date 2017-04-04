<?php

namespace App\Repositories;

use App\Models\Universidades;
use InfyOm\Generator\Common\BaseRepository;

class UniversidadesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'universidad',
        'telefonos',
        'rector',
        'tipo',
        'direccion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Universidades::class;
    }
}
