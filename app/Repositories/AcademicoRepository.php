<?php

namespace App\Repositories;

use App\Models\Academico;
use InfyOm\Generator\Common\BaseRepository;

class AcademicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Academico::class;
    }
}
