<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Estudiante",
 *      required={"nombres", "apellidos", "cedula", "area_id", "programa_id", "regional_id", "genero", "pensum", "semestre", "nacionalidad", "estado_civil"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nombres",
 *          description="nombres",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="apellidos",
 *          description="apellidos",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cedula",
 *          description="cedula",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="area_id",
 *          description="area_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="programa_id",
 *          description="programa_id",
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
 *          property="genero",
 *          description="genero",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="pensum",
 *          description="pensum",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="semestre",
 *          description="semestre",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="correo_principal",
 *          description="correo_principal",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="correo_institucional",
 *          description="correo_institucional",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="celular",
 *          description="celular",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="telefono",
 *          description="telefono",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fecha_nacimiento",
 *          description="fecha_nacimiento",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="expedicion_documento",
 *          description="expedicion_documento",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nacionalidad",
 *          description="nacionalidad",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="wp",
 *          description="wp",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="skype",
 *          description="skype",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="linkedin",
 *          description="linkedin",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="twitter",
 *          description="twitter",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="estado_civil",
 *          description="estado_civil",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="estado",
 *          description="estado",
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
class Estudiante extends Model
{
    use SoftDeletes;

    public $table = "estudiantes";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombres',
        'apellidos',
        'cedula',
        'area_id',
        'programa_id',
        'regional_id',
        'genero',
        'pensum',
        'semestre',
        'correo_principal',
        'correo_institucional',
        'celular',
        'telefono',
        'fecha_nacimiento',
        'expedicion_documento',
        'nacionalidad',
        'wp',
        'skype',
        'linkedin',
        'twitter',
        'estado_civil',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types. 
     * (señala el tipo de atributo)
     *
     * @var array
     */
    protected $casts = [
        'nombres' => 'string',
        'apellidos' => 'string',
        'cedula' => 'string',
        'area_id' => 'integer',
        'programa_id' => 'integer',
        'regional_id' => 'integer',
        'genero' => 'string',
        'pensum' => 'string',
        'semestre' => 'string',
        'correo_principal' => 'string',
        'correo_institucional' => 'string',
        'celular' => 'string',
        'telefono' => 'string',
        'fecha_nacimiento' => 'date',
        'expedicion_documento' => 'string',
        'nacionalidad' => 'string',
        'wp' => 'string',
        'skype' => 'string',
        'linkedin' => 'string',
        'twitter' => 'string',
        'estado_civil' => 'string',
        'estado' => 'string'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        'nombres' => 'required',
        'apellidos' => 'required',
        'cedula' => 'required|numeric',
        'area_id' => 'required',
        'programa_id' => 'required',
        'regional_id' => 'required',
        'genero' => 'required',
        'pensum' => 'required',
        'semestre' => 'required',
        'correo_principal' => 'email',
        'correo_institucional' => 'email',
        'nacionalidad' => 'required',
        'estado_civil' => 'required'
    ];
    /**
     *  seleccionadores
     */
    public static function selEstudiante(){
        $array['']= "seleccione...";
        $modelo = Estudiante::all()->toArray();
            foreach ($modelo as $key => $value) {
                $array[$value['id']]=$value['nombres'].' '.$value['apellidos'];
            }
        return ($array);
    }
    /**
     *  relaciones
     */
    public function area(){
        return $this->belongsTo(Area::class);
    }
    public function programa(){
        return $this->belongsTo(programa::class);
    }
    public function regional(){
        return $this->belongsTo(Regional::class);
    }
}
