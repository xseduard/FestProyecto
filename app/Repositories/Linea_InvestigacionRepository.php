<?php

namespace App\Repositories;

use App\Models\Linea_Investigacion;
use InfyOm\Generator\Common\BaseRepository;

class Linea_InvestigacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Linea_Investigacion::class;
    }
}
