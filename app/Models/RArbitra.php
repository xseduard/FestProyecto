<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="RArbitra",
 *      required={},
 *      @SWG\Property(
 *          property="id_academico",
 *          description="id_academico",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_trabajogrado",
 *          description="id_trabajogrado",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fecha",
 *          description="fecha",
 *          type="string",
 *          format="date"
 *      )
 * )
 */
class RArbitra extends Model
{
    use SoftDeletes;

    public $table = "tarbitra";
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_academico',
        'id_trabajogrado',
        'fecha',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_academico' => 'integer',
        'id_trabajogrado' => 'integer',
        'fecha' => 'date',
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
