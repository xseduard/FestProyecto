<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Doncencia",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="Cedula",
 *          description="Cedula",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="Nombre",
 *          description="Nombre",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="Apellidos",
 *          description="Apellidos",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="Direccion",
 *          description="Direccion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="Telefono",
 *          description="Telefono",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="Facultad",
 *          description="Facultad",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="Cargo",
 *          description="Cargo",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="Especialidad",
 *          description="Especialidad",
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
class Doncencia extends Model
{
    use SoftDeletes;

    public $table = "doncencias";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Cedula',
        'Nombre',
        'Apellidos',
        'Direccion',
        'Telefono',
        'Facultad',
        'Cargo',
        'Especialidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Cedula' => 'string',
        'Nombre' => 'string',
        'Apellidos' => 'string',
        'Direccion' => 'string',
        'Telefono' => 'string',
        'Facultad' => 'string',
        'Cargo' => 'string',
        'Especialidad' => 'string'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
