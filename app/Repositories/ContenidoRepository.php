<?php

namespace App\Repositories;

use App\Models\Contenido;
use InfyOm\Generator\Common\BaseRepository;

class ContenidoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'proyecto_id',
        'a1',
        'a2',
        'a3',
        'a4',
        'a5',
        'a6',
        'a7',
        'a8',
        'a9',
        'a10',
        'a11',
        'a12',
        'a13',
        'a14',
        'a15',
        'a16',
        'a17',
        'a18',
        'a19',
        'a20',
        'a21',
        'a22',
        'a23',
        'a24',
        'a25',
        'a26',
        'a27',
        'a28',
        'a29',
        'a30'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Contenido::class;
    }
}
