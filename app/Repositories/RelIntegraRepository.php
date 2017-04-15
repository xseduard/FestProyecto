<?php

namespace App\Repositories;

use App\Models\RelIntegra;
use InfyOm\Generator\Common\BaseRepository;

class RelIntegraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'proyecto_id',
        'estudiante_id',
        'user_id',
        'boo_ponente'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RelIntegra::class;
    }
}
