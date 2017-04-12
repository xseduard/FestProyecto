<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Jurado extends Model
{
    use SoftDeletes;

    public $table = "jurados";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombres',
        'apellidos',
        'cedula',
        'grupojurado_id',
        'user_id',
        'linea_investigacion_id',
        'area_id',
        'celular',
        'direccion',
        'correo'
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
        'grupojurado_id' => 'integer',
        'user_id' => 'integer',
        'linea_investigacion_id' => 'integer',
        'area_id' => 'integer',
        'celular' => 'string',
        'direccion' => 'string',
        'correo' => 'string'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        'nombres' => 'required',
        'apellidos' => 'required',
        'cedula' => 'required',
        'grupojurado_id' => 'required',
        'user_id' => '',
        'linea_investigacion_id' => 'required',
        'area_id' => 'required',
        'correo' => 'email'
    ];

      public function grupoJurado(){
        return $this->belongsTo('App\Models\GrupoJurado', 'grupojurado_id');
    }
     public function lineaInvestigacion(){
        return $this->belongsTo('App\Models\Linea_Investigacion', 'linea_investigacion_id');
    }
     public function area(){
        return $this->belongsTo('App\Models\area');
    }
}
