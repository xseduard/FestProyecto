<?php

namespace App\Repositories;

use App\Models\REstudia;
use InfyOm\Generator\Common\BaseRepository;

class REstudiaRepository extends BaseRepository
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
        return REstudia::class;
    }
}
