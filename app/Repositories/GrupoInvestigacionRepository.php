<?php

namespace App\Repositories;

use App\Models\GrupoInvestigacion;
use InfyOm\Generator\Common\BaseRepository;

class GrupoInvestigacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return GrupoInvestigacion::class;
    }
}
