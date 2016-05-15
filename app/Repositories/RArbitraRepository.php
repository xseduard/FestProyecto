<?php

namespace App\Repositories;

use App\Models\RArbitra;
use InfyOm\Generator\Common\BaseRepository;

class RArbitraRepository extends BaseRepository
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
        return RArbitra::class;
    }
}
