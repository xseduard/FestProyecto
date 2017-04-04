<?php

namespace App\Repositories;

use App\Models\ProductoGrupo;
use InfyOm\Generator\Common\BaseRepository;

class ProductoGrupoRepository extends BaseRepository
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
        return ProductoGrupo::class;
    }
}
