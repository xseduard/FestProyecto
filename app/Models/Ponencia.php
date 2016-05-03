<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Ponencia extends Model
{
    use SoftDeletes;

    public $table = "ponencia";
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'titulop';

    public $fillable = [
        'titulop',
        'periodo',
        'fecha',
        'país',
        'ciudad',
        'institucion',
        'paginaw',
        'idprograma'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'titulop' => 'string',
        'periodo' => 'string',
        'fecha' => 'date',
        'país' => 'string',
        'ciudad' => 'string',
        'institucion' => 'string',
        'paginaw' => 'string',
        'idprograma' => 'string'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
