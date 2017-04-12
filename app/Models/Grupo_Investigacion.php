<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Grupo_Investigacion extends Model
{
    use SoftDeletes;

    public $table = "grupo_investigacions";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'año_formacion',
        'gran_area',
        'area_conocimiento',
        'cedula_primer_lider',
        'nombre_primer_lider',
        'cedula_segundo_lider',
        'nombre_segundo_lider',
        'grupLAC'
    ];

    /**
     * The attributes that should be casted to native types. 
     * (señala el tipo de atributo)
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'año_formacion' => 'string',
        'gran_area' => 'string',
        'area_conocimiento' => 'string',
        'cedula_primer_lider' => 'string',
        'nombre_primer_lider' => 'string',
        'cedula_segundo_lider' => 'string',
        'nombre_segundo_lider' => 'string',
        'grupLAC' => 'string'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'año_formacion' => 'required',
        'cedula_primer_lider' => 'required',
        'nombre_primer_lider' => 'required',
        'cedula_segundo_lider' => 'required',
        'nombre_segundo_lider' => 'required',
        'grupLAC' => 'required'
    ];

    public static function selGrupo_Investigacion(){
        //$array['']= "seleccione...";
        $modelo = Grupo_Investigacion::all()->toArray();
            foreach ($modelo as $key => $value) {
                $array[$value['id']]=$value['nombre'];
            }
        return ($array);
    }

}
