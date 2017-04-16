<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Proyecto",
 *      required={"regional_id", "semillero_id", "area_id", "programa_id", "user_id", "linea_id", "titulo"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="pais",
 *          description="pais",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="universidad",
 *          description="universidad",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="regional_id",
 *          description="regional_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="semillero_id",
 *          description="semillero_id",
 *          type="integer",
 *          format="int32"
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
 *          property="user_id",
 *          description="user_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="estado_id",
 *          description="estado_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="linea_id",
 *          description="linea_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="proyecto_content_id",
 *          description="proyecto_content_id",
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
 *          property="evento_expo_id",
 *          description="evento_expo_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="tipo",
 *          description="tipo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="titulo",
 *          description="titulo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="descripcion",
 *          description="descripcion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="progreso_estimado",
 *          description="progreso_estimado",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="boo_publicacion",
 *          description="boo_publicacion",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="detalles_publicacion",
 *          description="detalles_publicacion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="boo_solicitud_revision",
 *          description="boo_solicitud_revision",
 *          type="boolean"
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
        'boo_contenido'
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
}
