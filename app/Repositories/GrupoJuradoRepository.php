<?php

namespace App\Repositories;

use App\Models\GrupoJurado;
use InfyOm\Generator\Common\BaseRepository;

class GrupoJuradoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo',
        'regional_id',
        'observaciones'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return GrupoJurado::class;
    }
}
