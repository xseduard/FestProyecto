<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Grado",
 *      required={titulo},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="titulo",
 *          description="titulo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nivel",
 *          description="nivel",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="periodo",
 *          description="periodo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="observaciones",
 *          description="observaciones",
 *          type="string"
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
class Grado extends Model
{
    use SoftDeletes;

    public $table = "grados";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        "titulo",
        "nivel",
        "periodo",
        "observaciones"
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "titulo" => "string",
        "nivel" => "integer",
        "periodo" => "string",
        "observaciones" => "string"
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        "titulo" => "required|alpha",
        "nivel" => "required|numeric|digits_between:1,2",
        "observaciones"=> "alpha",
    ];
}
