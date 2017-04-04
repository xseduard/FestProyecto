<?php

namespace App\Repositories;

use App\Models\Doncencia;
use InfyOm\Generator\Common\BaseRepository;

class DoncenciaRepository extends BaseRepository
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
        return Doncencia::class;
    }
}
