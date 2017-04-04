<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Ponencia",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="titulo",
 *          description="titulo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="periodo",
 *          description="periodo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fecha",
 *          description="fecha",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="pais",
 *          description="pais",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="ciudad",
 *          description="ciudad",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="institucion",
 *          description="institucion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="pagina",
 *          description="pagina",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="id_programa",
 *          description="id_programa",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Ponencia extends Model
{
    use SoftDeletes;

    public $table = "tponencias";
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'titulo',
        'periodo',
        'fecha',
        'pais',
        'ciudad',
        'institucion',
        'pagina',
        'deleted_at',
        'id_programa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo' => 'string',
        'periodo' => 'string',
        'fecha' => 'date',
        'pais' => 'string',
        'ciudad' => 'string',
        'institucion' => 'string',
        'pagina' => 'string',
        'deleted_at' => 'datetime',
        'id_programa' => 'integer'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
