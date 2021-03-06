<?php

namespace App\Repositories;

use App\Models\programa;
use InfyOm\Generator\Common\BaseRepository;

class programaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'modalidad',
        'area_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return programa::class;
    }
}
