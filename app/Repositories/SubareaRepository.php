<?php

namespace App\Repositories;

use App\Models\Subarea;
use InfyOm\Generator\Common\BaseRepository;

class SubareaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'subarea'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Subarea::class;
    }
}
