<?php

namespace App\Repositories;

use App\Models\RDesarrolla;
use InfyOm\Generator\Common\BaseRepository;

class RDesarrollaRepository extends BaseRepository
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
        return RDesarrolla::class;
    }
}
