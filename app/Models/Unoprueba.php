<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Unoprueba",
 *      required={gato},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="gato",
 *          description="gato",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="perro",
 *          description="perro",
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
class Unoprueba extends Model
{
    use SoftDeletes;

    public $table = "unopruebas";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        "gato",
        "perro",
        "numero"
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "gato" => "string",
        "perro" => "string",
        "numero" => "integer"
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        "gato" => "required",
        "perro" => "max:10"
    ];
}
