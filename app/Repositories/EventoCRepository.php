<?php

namespace App\Repositories;

use App\Models\EventoC;
use InfyOm\Generator\Common\BaseRepository;

class EventoCRepository extends BaseRepository
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
        return EventoC::class;
    }
}
