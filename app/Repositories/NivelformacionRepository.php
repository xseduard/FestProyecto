<?php

namespace App\Repositories;

use App\Models\Nivelformacion;
use InfyOm\Generator\Common\BaseRepository;

class NivelformacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nivel'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Nivelformacion::class;
    }
}
