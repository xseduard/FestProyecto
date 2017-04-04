<?php

namespace App\Repositories;

use App\Models\Areainvestigacion;
use InfyOm\Generator\Common\BaseRepository;

class AreainvestigacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'area'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Areainvestigacion::class;
    }
}
