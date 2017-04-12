<?php

namespace App\Repositories;

use App\Models\Grupo_Investigacion;
use InfyOm\Generator\Common\BaseRepository;

class Grupo_InvestigacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'año_formacion',
        'gran_area',
        'area_conocimiento',
        'cedula_primer_lider',
        'nombre_primer_lider',
        'cedula_segundo_lider',
        'nombre_segundo_lider',
        'grupLAC'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Grupo_Investigacion::class;
    }
}
