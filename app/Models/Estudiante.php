<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Estudiante",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="area_interes",
 *          description="area_interes",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="id_academico",
 *          description="id_academico",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Estudiante extends Model
{
    use SoftDeletes;

    public $table = "testudiantes";
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'area_interes',
        'deleted_at',
        'id_academico'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'area_interes' => 'string',
        'deleted_at' => 'datetime',
        'id_academico' => 'integer'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
