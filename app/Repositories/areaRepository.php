<?php

namespace App\Repositories;

use App\Models\area;
use InfyOm\Generator\Common\BaseRepository;

class areaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'decano'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return area::class;
    }
}
