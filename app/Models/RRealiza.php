<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="RRealiza",
 *      required={},
 *      @SWG\Property(
 *          property="id_academico",
 *          description="id_academico",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_proyecto_aula",
 *          description="id_proyecto_aula",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="periodo",
 *          description="periodo",
 *          type="string"
 *      )
 * )
 */
class RRealiza extends Model
{
    use SoftDeletes;

    public $table = "trealiza";
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_academico',
        'id_proyecto_aula',
        'periodo',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_academico' => 'integer',
        'id_proyecto_aula' => 'integer',
        'periodo' => 'string',
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
