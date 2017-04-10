<?php

namespace App\Repositories;

use App\Models\departamento;
use InfyOm\Generator\Common\BaseRepository;

class departamentoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return departamento::class;
    }
}
