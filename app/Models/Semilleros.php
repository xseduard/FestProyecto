<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Semilleros",
 *      required={},
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
 *          property="facultad",
 *          description="facultad",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="grupo_de_investigacion",
 *          description="grupo_de_investigacion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fecha_de_creacion",
 *          description="fecha_de_creacion",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="docente_asesor",
 *          description="docente_asesor",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="estudiante_lider",
 *          description="estudiante_lider",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="programa",
 *          description="programa",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="code_miembros",
 *          description="code_miembros",
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
class Semilleros extends Model
{
    use SoftDeletes;

    public $table = "semilleros";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'facultad',
        'grupo_de_investigacion',
        'fecha_de_creacion',
        'docente_asesor',
        'estudiante_lider',
        'programa',
        'code_miembros'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'facultad' => 'string',
        'grupo_de_investigacion' => 'string',
        'fecha_de_creacion' => 'date',
        'docente_asesor' => 'string',
        'estudiante_lider' => 'string',
        'programa' => 'string',
        'code_miembros' => 'integer'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
