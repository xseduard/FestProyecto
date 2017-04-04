<?php

namespace App\Repositories;

use App\Models\RRealiza;
use InfyOm\Generator\Common\BaseRepository;

class RRealizaRepository extends BaseRepository
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
        return RRealiza::class;
    }
}
