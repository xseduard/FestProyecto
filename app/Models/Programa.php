<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Programa",
 *      required={},
 *      @SWG\Property(
 *          property="idprograma",
 *          description="idprograma",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nombre",
 *          description="nombre",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="duracion",
 *          description="duracion",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Programa extends Model
{
    use SoftDeletes;

    public $table = "programa";
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'idprograma';

    public $fillable = [
        'idprograma',
        'nombre',
        'duracion',

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idprograma' => 'string',
        'nombre' => 'string',
        'duracion' => 'integer'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
