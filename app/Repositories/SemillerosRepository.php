<?php

namespace App\Repositories;

use App\Models\Semilleros;
use InfyOm\Generator\Common\BaseRepository;

class SemillerosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'facultad',
        'grupo_de_investigacion',
        'fecha_de_creacion',
        'docente_asesor',
        'estudiante_lider',
        'programa',
        'code_miembros'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Semilleros::class;
    }
}
