<?php

namespace App\Repositories;

use App\Models\Asignaturas;
use InfyOm\Generator\Common\BaseRepository;

class AsignaturasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'asignatura'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Asignaturas::class;
    }
}
