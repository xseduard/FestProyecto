<?php

namespace App\Repositories;

use App\Models\EventoExpo;
use InfyOm\Generator\Common\BaseRepository;

class EventoExpoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'grupojurado_id',
        'nombre',
        'direccion',
        'informacion',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return EventoExpo::class;
    }
}
