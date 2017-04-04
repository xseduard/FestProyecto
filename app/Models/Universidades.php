<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Universidades",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="universidad",
 *          description="universidad",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="telefonos",
 *          description="telefonos",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="rector",
 *          description="rector",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tipo",
 *          description="tipo",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="direccion",
 *          description="direccion",
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
class Universidades extends Model
{
    use SoftDeletes;

    public $table = "universidades";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'universidad',
        'telefonos',
        'rector',
        'tipo',
        'direccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'universidad' => 'string',
        'telefonos' => 'string',
        'rector' => 'string',
        'tipo' => 'integer',
        'direccion' => 'string'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
