<?php

namespace App\Repositories;

use App\Models\Nodo;
use InfyOm\Generator\Common\BaseRepository;

class NodoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nodo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Nodo::class;
    }
}
