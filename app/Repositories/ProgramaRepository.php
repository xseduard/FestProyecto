<?php

namespace App\Repositories;

use App\Models\Programa;
use InfyOm\Generator\Common\BaseRepository;

class ProgramaRepository extends BaseRepository
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
        return Programa::class;
    }
}
