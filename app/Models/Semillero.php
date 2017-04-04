<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Semillero",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nombre",
 *          description="nombre",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="sigla",
 *          description="sigla",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fecha_vinculacion",
 *          description="fecha_vinculacion",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="id_programa",
 *          description="id_programa",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Semillero extends Model
{
    use SoftDeletes;

    public $table = "tsemilleros";
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'sigla',
        'fecha_vinculacion',
        'deleted_at',
        'id_programa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'sigla' => 'string',
        'fecha_vinculacion' => 'date',
        'deleted_at' => 'datetime',
        'id_programa' => 'integer'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
