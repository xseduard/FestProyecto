<?php

namespace App\Repositories;

use App\Models\ProyectoInvestigacion;
use InfyOm\Generator\Common\BaseRepository;

class ProyectoInvestigacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pais',
        'nodo',
        'universidad',
        'semillero',
        'ponente',
        'categoria',
        'titulo',
        'introduccion',
        'problema_justificacion',
        'objetivo_general',
        'objetivo_especifico',
        'referente_teorico',
        'metodologia',
        'conclusion',
        'bibliografia'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProyectoInvestigacion::class;
    }
}
