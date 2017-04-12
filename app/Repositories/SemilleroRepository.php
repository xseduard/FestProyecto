<?php

namespace App\Repositories;

use App\Models\Semillero;
use InfyOm\Generator\Common\BaseRepository;

class SemilleroRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'director_id',
        'coordinador_id',
        'estudiante_lider_id',
        'regional_id',
        'grupo_investigacion_id',
        'informacion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Semillero::class;
    }
}
