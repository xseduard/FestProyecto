<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Pais",
 *      required={},
 *      @SWG\Property(
 *          property="pais",
 *          description="pais",
 *          type="string"
 *      )
 * )
 */
class Pais extends Model
{
    use SoftDeletes;

    public $table = "pais";
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];


    public $fillable = [
        'pais',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pais' => 'string',
        'deleted_at' => 'datetime',
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
