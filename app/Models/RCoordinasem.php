<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="RCoordinasem",
 *      required={},
 *      @SWG\Property(
 *          property="id_semillero",
 *          description="id_semillero",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_academico",
 *          description="id_academico",
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
class RCoordinasem extends Model
{
    use SoftDeletes;

    public $table = "tcoordinasem";
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_semillero',
        'id_academico',
        'periodo',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_semillero' => 'integer',
        'id_academico' => 'integer',
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
