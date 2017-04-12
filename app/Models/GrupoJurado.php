<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="GrupoJurado",
 *      required={"codigo", "regional_id"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="codigo",
 *          description="codigo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="regional_id",
 *          description="regional_id",
 *          type="integer",
 *          format="int32"
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
class GrupoJurado extends Model
{
    use SoftDeletes;

    public $table = "grupo_jurados";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo',
        'regional_id',
        'observaciones'
    ];

    /**
     * The attributes that should be casted to native types. 
     * (señala el tipo de atributo)
     *
     * @var array
     */
    protected $casts = [
        'codigo' => 'string',
        'observaciones' => 'string'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        'codigo' => 'required',
        'regional_id' => 'required'
    ];
    /**
     * Funciones
     */
    public static function selGrupoJurado(){
        $array['']= "seleccione...";
        $modelo = GrupoJurado::all()->toArray();
            foreach ($modelo as $key => $value) {
                $array[$value['id']]=$value['codigo'];
            }
        return ($array);
    }

    /**
     * RELACIONES
     */
    public function regional(){
        return $this->belongsTo('App\Models\Regional');
    }
}
