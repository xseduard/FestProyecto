<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Pruebaespecial",
 *      required={numero_uno},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="textouno",
 *          description="textouno",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="texto_dos",
 *          description="texto_dos",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="texto_tres",
 *          description="texto_tres",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="numero_uno",
 *          description="numero_uno",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="numero_dos",
 *          description="numero_dos",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fecha",
 *          description="fecha",
 *          type="string",
 *          format="date"
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
class Pruebaespecial extends Model
{
    use SoftDeletes;

    public $table = "pruebaespecials";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        "textouno",
        "texto_dos",
        "texto_tres",
        "numero_uno",
        "numero_dos",
        "fecha"
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "textouno" => "string",
        "texto_dos" => "string",
        "texto_tres" => "string",
        "numero_uno" => "integer",
        "numero_dos" => "integer",
        "fecha" => "date"
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        "textouno" => "",
        "texto_tres" => "min:5",
        "numero_uno" => "required",
        "numero_dos" => "numeric",
        "fecha" => ""
    ];
}
