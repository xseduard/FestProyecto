<?php

namespace App\Repositories;

use App\Models\Nota;
use InfyOm\Generator\Common\BaseRepository;

class NotaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'proyecto_id',
        'nota'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Nota::class;
    }
}
