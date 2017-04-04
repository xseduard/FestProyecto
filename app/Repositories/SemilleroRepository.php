<?php

namespace App\Repositories;

use App\Models\Semillero;
use InfyOm\Generator\Common\BaseRepository;

class SemilleroRepository extends BaseRepository
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
        return Semillero::class;
    }
}
