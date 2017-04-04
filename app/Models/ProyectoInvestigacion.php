<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="ProyectoInvestigacion",
 *      required={},
 *      @SWG\Property(
 *          property="pais",
 *          description="pais",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nodo",
 *          description="nodo",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="universidad",
 *          description="universidad",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="semillero",
 *          description="semillero",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="ponente",
 *          description="ponente",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="categoria",
 *          description="categoria",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="titulo",
 *          description="titulo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="introduccion",
 *          description="introduccion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="problema_justificacion",
 *          description="problema_justificacion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="objetivo_general",
 *          description="objetivo_general",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="objetivo_especifico",
 *          description="objetivo_especifico",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="referente_teorico",
 *          description="referente_teorico",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="metodologia",
 *          description="metodologia",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="conclusion",
 *          description="conclusion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="bibliografia",
 *          description="bibliografia",
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
class ProyectoInvestigacion extends Model
{
    use SoftDeletes;

    public $table = "proyecto_investigacions";
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'pais',
        'nodo',
        'universidad',
        'semillero',
        'ponente',
        'categoria',
        'titulo',
        'introduccion',
        'problema_justificacion',
        'objetivo_general',
        'objetivo_especifico',
        'referente_teorico',
        'metodologia',
        'conclusion',
        'bibliografia',
        'deleted_at',
        'nivel_formacion',
        'asignatura',
        'area_investigacion',
        'sub_area',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pais' => 'integer',
        'nodo' => 'integer',
        'universidad' => 'integer',
        'semillero' => 'integer',
        'ponente' => 'integer',
        'categoria' => 'string',
        'titulo' => 'string',
        'introduccion' => 'string',
        'problema_justificacion' => 'string',
        'objetivo_general' => 'string',
        'objetivo_especifico' => 'string',
        'referente_teorico' => 'string',
        'metodologia' => 'string',
        'conclusion' => 'string',
        'bibliografia' => 'string',
        'deleted_at' => 'datetime',
        'nivel_formacion' => 'integer',
        'asignatura' => 'integer',
        'area_investigacion' => 'integer',
        'sub_area' => 'integer',
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        
    ];
    public function scopeSNodo($query, $valor)
    {
        if ($valor!="") {           
            $query->where('nodo', "=", "$valor");               
        }
    }
    public function scopeSSemillero($query, $valor)
    {
        if ($valor!="") {           
            $query->where('semillero', "=", "$valor");               
        }
    }
    public function scopeSArea_investigacion($query, $valor)
    {
        if ($valor!="") {           
            $query->where('area_investigacion', "=", "$valor");               
        }
    }
    public function scopeSAsignatura($query, $valor)
    {
        if ($valor!="") {           
            $query->where('asignatura', "=", "$valor");               
        }
    }

    public function Pais()
    {
        return $this->hasOne('App\Models\Pais', 'id', 'pais');
    }
    public function Nodo()
    {
        return $this->hasOne('App\Models\Nodo', 'id', 'nodo');
    }
    public function Universidad()
    {
        return $this->hasOne('App\Models\Universidades', 'id', 'universidad');
    }
    public function EStudiantes()
    {
        return $this->hasOne('App\Models\EStudiantes', 'id', 'ponente');
    }
    public function Ponente()
    {
        return $this->hasOne('App\Models\Ponencia', 'id', 'ponente');
    }
    public function Semillero()
    {
        return $this->hasOne('App\Models\Semilleros', 'id', 'semillero');
    }
  
}
