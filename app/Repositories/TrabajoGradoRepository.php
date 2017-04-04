<?php

namespace App\Repositories;

use App\Models\TrabajoGrado;
use InfyOm\Generator\Common\BaseRepository;

class TrabajoGradoRepository extends BaseRepository
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
        return TrabajoGrado::class;
    }
}
