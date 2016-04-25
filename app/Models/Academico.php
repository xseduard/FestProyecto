<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Academico",
 *      required={},
 *      @SWG\Property(
 *          property="idacademico",
 *          description="idacademico",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nombres",
 *          description="nombres",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="sexo",
 *          description="sexo",
 *          type="string"
 *      )
 * )
 */
class Academico extends Model
{
    use SoftDeletes;

    public $table = "academico";
    
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'idacademico';

    public $fillable = [
        "idacademico",
        "nombres",
        "sexo"
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "idacademico" => "string",
        "nombres" => "string",
        "sexo" => "string"
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
