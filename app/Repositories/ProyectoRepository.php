<?php

namespace App\Repositories;

use App\Models\Proyecto;
use InfyOm\Generator\Common\BaseRepository;

class ProyectoRepository extends BaseRepository
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
        return Proyecto::class;
    }
}
