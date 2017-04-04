<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="REstudia",
 *      required={},
 *      @SWG\Property(
 *          property="id_academico",
 *          description="id_academico",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_programa",
 *          description="id_programa",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fecha_matricula",
 *          description="fecha_matricula",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="fecha_finalizacion",
 *          description="fecha_finalizacion",
 *          type="string",
 *          format="date"
 *      )
 * )
 */
class REstudia extends Model
{
    use SoftDeletes;

    public $table = "testudia";
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_academico',
        'id_programa',
        'fecha_matricula',
        'fecha_finalizacion',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_academico' => 'integer',
        'id_programa' => 'integer',
        'fecha_matricula' => 'date',
        'fecha_finalizacion' => 'date',
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
