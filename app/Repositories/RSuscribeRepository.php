<?php

namespace App\Repositories;

use App\Models\RSuscribe;
use InfyOm\Generator\Common\BaseRepository;

class RSuscribeRepository extends BaseRepository
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
        return RSuscribe::class;
    }
}
