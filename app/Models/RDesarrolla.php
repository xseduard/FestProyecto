<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="RDesarrolla",
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
 *          property="periodo",
 *          description="periodo",
 *          type="string"
 *      )
 * )
 */
class RDesarrolla extends Model
{
    use SoftDeletes;

    public $table = "tdesarrolla";
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_academico',
        'id_trabajogrado',
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
        'id_trabajogrado' => 'integer',
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
