<?php

namespace App\Repositories;

use App\Models\ProyectoAula;
use InfyOm\Generator\Common\BaseRepository;

class ProyectoAulaRepository extends BaseRepository
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
        return ProyectoAula::class;
    }
}
