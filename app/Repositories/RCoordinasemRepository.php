<?php

namespace App\Repositories;

use App\Models\RCoordinasem;
use InfyOm\Generator\Common\BaseRepository;

class RCoordinasemRepository extends BaseRepository
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
        return RCoordinasem::class;
    }
}
