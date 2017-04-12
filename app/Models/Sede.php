<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Sede",
 *      required={"nombre", "municipio_id", "regional_id"},
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
 *          property="municipio_id",
 *          description="municipio_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="regional_id",
 *          description="regional_id",
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
class Sede extends Model
{
    use SoftDeletes;

    public $table = "sedes";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'info',
        'municipio_id',
        'regional_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'direccion' => 'string',
        'telefono' => 'string',
        'info' => 'string',
        'municipio_id' => 'integer',
        'regional_id' => 'integer'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'direccion' => '',
        'telefono' => '',
        'info' => '',
        'municipio_id' => 'required',
        'regional_id' => 'required'
    ];
    /**
     * relaciones
     */
  
    public function regional(){
        return $this->belongsTo('App\Models\Regional');
    }
     public function municipio(){
        return $this->belongsTo('App\Models\municipio');
    }
}
