<?php

namespace App\Repositories;

use App\Models\Titulo;
use InfyOm\Generator\Common\BaseRepository;

class TituloRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'capitulo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Titulo::class;
    }
}
