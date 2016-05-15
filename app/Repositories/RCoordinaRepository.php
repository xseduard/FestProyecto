<?php

namespace App\Repositories;

use App\Models\RCoordina;
use InfyOm\Generator\Common\BaseRepository;

class RCoordinaRepository extends BaseRepository
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
        return RCoordina::class;
    }
}
