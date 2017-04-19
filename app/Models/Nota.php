<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Nota",
 *      required={"nota"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="tipo",
 *          description="tipo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="user_id",
 *          description="user_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="proyecto_id",
 *          description="proyecto_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nota",
 *          description="nota",
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
class Nota extends Model
{
    use SoftDeletes;

    public $table = "notas";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'tipo',
        'user_id',
        'proyecto_id',
        'nota'
    ];

    /**
     * The attributes that should be casted to native types. 
     * (señala el tipo de atributo)
     *
     * @var array
     */
    protected $casts = [
        'tipo' => 'string',
        'user_id' => 'integer',
        'proyecto_id' => 'integer',
        'nota' => 'string'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        'nota' => 'required'
    ];

        public static function notasProyecto($id){
        
        $modelo = Nota::all()->toArray();
            foreach ($modelo as $key => $value) {
                if ($value['proyecto_id']==$id) {
                    $array[$value['id']] = ['nota' => $value['nota'], 'tipo' => $value['tipo']];
                }                
            }
        return ($array);
    }

    public function usuario(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
