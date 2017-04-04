<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class GrupoInvestigacion extends Model
{
    use SoftDeletes;

    public $table = "tgrupo_investigaciones";
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'gruplac',
        'categoria',
        'fecha_creacion',
        'reconocido',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'gruplac' => 'string',
        'categoria' => 'string',
        'fecha_creacion' => 'date',
        'reconocido' => 'string',
        'deleted_at' => 'datetime'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
