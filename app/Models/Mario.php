<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Mario",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="texto",
 *          description="texto",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="numero",
 *          description="numero",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Mario extends Model
{
    use SoftDeletes;

    public $table = "marios";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        "texto",
        "numero"
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "texto" => "string",
        "numero" => "integer"
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        "texto" => "min:5",
        "numero" => "numeric"
    ];
}
