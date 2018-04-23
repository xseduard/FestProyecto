<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Contenido extends Model
{
    use SoftDeletes;

    public $table = "contenidos";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types. 
     * (señala el tipo de atributo)
     *
     * @var array
     */
    protected $casts = [
        'proyecto_id' => 'integer',
        'a1' => 'string',
        'a2' => 'string',
        'a3' => 'string',
        'a4' => 'string',
        'a5' => 'string',
        'a6' => 'string',
        'a7' => 'string',
        'a8' => 'string',
        'a9' => 'string',
        'a10' => 'string',
        'a11' => 'string',
        'a12' => 'string',
        'a13' => 'string',
        'a14' => 'string',
        'a15' => 'string',
        'a16' => 'string',
        'a17' => 'string',
        'a18' => 'string',
        'a19' => 'string',
        'a20' => 'string',
        'a21' => 'string',
        'a22' => 'string',
        'a23' => 'string',
        'a24' => 'string',
        'a25' => 'string',
        'a26' => 'string',
        'a27' => 'string',
        'a28' => 'string',
        'a29' => 'string',
        'a30' => 'string'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
