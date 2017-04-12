<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Semillero",
 *      required={"nombre", "director_id", "coordinador_id", "estudiante_lider_id", "regional_id", "grupo_investigacion_id"},
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
 *          property="director_id",
 *          description="director_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="coordinador_id",
 *          description="coordinador_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="estudiante_lider_id",
 *          description="estudiante_lider_id",
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
 *          property="grupo_investigacion_id",
 *          description="grupo_investigacion_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="informacion",
 *          description="informacion",
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
class Semillero extends Model
{
    use SoftDeletes;

    public $table = "semilleros";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'director_id',
        'coordinador_id',
        'estudiante_lider_id',
        'regional_id',
        'grupo_investigacion_id',
        'informacion'
    ];

    /**
     * The attributes that should be casted to native types. 
     * (señala el tipo de atributo)
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'director_id' => 'integer',
        'coordinador_id' => 'integer',
        'estudiante_lider_id' => 'integer',
        'regional_id' => 'integer',
        'grupo_investigacion_id' => 'integer',
        'informacion' => 'string'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'director_id' => 'required',
        'coordinador_id' => 'required',
        'estudiante_lider_id' => 'required',
        'regional_id' => 'required',
        'grupo_investigacion_id' => 'required'
    ];
    /**
     * seleccionadores
     */
    public static function selSemillero(){
        //$array['']= "seleccione...";
        $modelo = Semillero::all()->toArray();
            foreach ($modelo as $key => $value) {
                $array[$value['id']]=$value['nombre'];
            }
        return ($array);
    }
    /**
     * relaciones
     */

    public function regional(){
        return $this->belongsTo('App\Models\Regional');
    }
    public function estudiante(){
        return $this->belongsTo('App\Models\Estudiante', 'estudiante_lider_id');
    }
    public function directorUser(){
        return $this->belongsTo('App\User', 'director_id');
    }
    public function coordinadorUser(){
        return $this->belongsTo('App\User', 'coordinador_id');
    }
    public function grupoinvestigacion(){
        return $this->belongsTo('App\Models\Grupo_Investigacion', 'grupo_investigacion_id');
    }


}
