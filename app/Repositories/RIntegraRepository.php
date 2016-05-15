<?php

namespace App\Repositories;

use App\Models\RIntegra;
use InfyOm\Generator\Common\BaseRepository;

class RIntegraRepository extends BaseRepository
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
        return RIntegra::class;
    }
}
