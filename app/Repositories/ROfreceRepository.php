<?php

namespace App\Repositories;

use App\Models\ROfrece;
use InfyOm\Generator\Common\BaseRepository;

class ROfreceRepository extends BaseRepository
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
        return ROfrece::class;
    }
}
