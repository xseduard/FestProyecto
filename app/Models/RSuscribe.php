<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="RSuscribe",
 *      required={},
 *      @SWG\Property(
 *          property="id_lineai",
 *          description="id_lineai",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_proyecto",
 *          description="id_proyecto",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_programa",
 *          description="id_programa",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class RSuscribe extends Model
{
    use SoftDeletes;

    public $table = "tsuscribe";
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_lineai',
        'id_proyecto',
        'id_programa',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_lineai' => 'integer',
        'id_proyecto' => 'integer',
        'id_programa' => 'integer',
        'deleted_at' => 'datetime'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
