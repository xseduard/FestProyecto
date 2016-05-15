<?php

namespace App\Repositories;

use App\Models\Docente;
use InfyOm\Generator\Common\BaseRepository;

class DocenteRepository extends BaseRepository
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
        return Docente::class;
    }
}
