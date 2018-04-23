<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proyecto extends Model
{
    use SoftDeletes;

    public $table = "proyectos";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'pais',
        'universidad',
        'regional_id',
        'semillero_id',
        'area_id',
        'programa_id',
        'user_id',
        'estado_id',
        'linea_id',
        'grupojurado_id',
        'evento_expo_id',
        'tipo',
        'titulo',
        'descripcion',
        'progreso_estimado',
        'boo_publicacion',
        'detalles_publicacion',
        'boo_solicitud_revision',
        'boo_contenido',
    ];



    /**
     * The attributes that should be casted to native types. 
     * (señala el tipo de atributo)
     *
     * @var array
     */
    protected $casts = [
        'pais' => 'string',
        'universidad' => 'string',
        'regional_id' => 'integer',
        'semillero_id' => 'integer',
        'area_id' => 'integer',
        'programa_id' => 'integer',
        'user_id' => 'integer',
        'estado_id' => 'integer',
        'linea_id' => 'integer',
        'grupojurado_id' => 'integer',
        'evento_expo_id' => 'integer',
        'tipo' => 'string',
        'titulo' => 'string',
        'descripcion' => 'string',
        'progreso_estimado' => 'string',
        'boo_publicacion' => 'boolean',
        'detalles_publicacion' => 'string',
        'boo_solicitud_revision' => 'boolean',
        'boo_contenido' => 'boolean'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        'regional_id' => 'required',
        'semillero_id' => 'required',
        'area_id' => 'required',
        'programa_id' => 'required',
        'user_id' => '',
        'linea_id' => 'required',
        'titulo' => 'required'
    ];

    public static $name_attributes = [
        'pais' => 'pais',
        'universidad' => 'Universidad',
        'regional_id' => 'Regional',
        'semillero_id' => 'Semillero',
        'area_id' => 'Área',
        'programa_id' => 'Sub Área',
        'user_id' => 'Usuario',
        'estado_id' => 'Estado',
        'linea_id' => 'Linea deinvestigación',
        'grupojurado_id' => 'Comité de Jurado',
        'evento_expo_id' => 'Evento de Exposición',
        'tipo' => 'Tipo de proyecto',
        'titulo' => 'Titulo',
        'descripcion' => 'Descripción',
        'progreso_estimado' => 'Progreso estimado',        
        'detalles_publicacion' => 'Detalles de publicación',
        
    ];
    /**
     * Relaciones
     */
    public function regional(){
        return $this->belongsTo('App\Models\Regional');
    }
    public function area(){
        return $this->belongsTo(Area::class);
    }
    public function programa(){
        return $this->belongsTo(programa::class);
    }
    public function grupojurado(){
        return $this->belongsTo('App\Models\GrupoJurado');
    }
    public function usuario(){
        return $this->belongsTo('App\User', 'user_id');
    }
    public function semillero(){
        return $this->belongsTo('App\Models\Semillero');
    }
    public function linea(){
        return $this->belongsTo('App\Models\Linea_Investigacion');
    }
    public function estado(){
        return $this->belongsTo('App\Models\Estado');
    }
    public function evento(){
        return $this->belongsTo('App\Models\EventoExpo', 'evento_expo_id');
    }
    public function nota(){
        return $this->hasMany('App\Models\Nota', 'proyecto_id', 'id');
    }

}
