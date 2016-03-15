<?php

namespace App\Repositories;

use App\Models\Unoprueba;
use InfyOm\Generator\Common\BaseRepository;

class UnopruebaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        "gato"
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Unoprueba::class;
    }
}
