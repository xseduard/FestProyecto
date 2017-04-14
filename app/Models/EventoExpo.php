<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="EventoExpo",
 *      required={"grupojurado_id", "nombre"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="grupojurado_id",
 *          description="grupojurado_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nombre",
 *          description="nombre",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="direccion",
 *          description="direccion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="informacion",
 *          description="informacion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="user_id",
 *          description="user_id",
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
class EventoExpo extends Model
{
    use SoftDeletes;

    public $table = "evento_expos";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'grupojurado_id',
        'nombre',
        'direccion',
        'informacion',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types. 
     * (señala el tipo de atributo)
     *
     * @var array
     */
    protected $casts = [
        'grupojurado_id' => 'integer',
        'nombre' => 'string',
        'direccion' => 'string',
        'informacion' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        'grupojurado_id' => 'required',
        'nombre' => 'required'
    ];

    /**
     * Relaciones
     */

    public function grupojurado(){
        return $this->belongsTo('App\Models\GrupoJurado');
    }
        public function usuario(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
