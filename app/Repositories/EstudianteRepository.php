<?php

namespace App\Repositories;

use App\Models\Estudiante;
use InfyOm\Generator\Common\BaseRepository;

class EstudianteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombres',
        'apellidos',
        'cedula',
        'area_id',
        'programa_id',
        'regional_id',
        'genero',
        'pensum',
        'semetre',
        'correo_principal',
        'correo_institucional',
        'celular',
        'telefono',
        'fecha_nacimiento',
        'expedicion_documento',
        'nacionalidad',
        'wp',
        'skype',
        'linkedin',
        'twitter',
        'estado_civil',
        'estado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Estudiante::class;
    }
}
