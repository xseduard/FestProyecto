<?php

namespace App\Repositories;

use App\Models\LineaI;
use InfyOm\Generator\Common\BaseRepository;

class LineaIRepository extends BaseRepository
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
        return LineaI::class;
    }
}
