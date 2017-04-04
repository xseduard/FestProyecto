<?php

namespace App\Repositories;

use App\Models\Ponencia;
use InfyOm\Generator\Common\BaseRepository;

class PonenciaRepository extends BaseRepository
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
        return Ponencia::class;
    }
}
