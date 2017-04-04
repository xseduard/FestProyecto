<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Nodo",
 *      required={},
 *      @SWG\Property(
 *          property="nodo",
 *          description="nodo",
 *          type="string"
 *      )
 * )
 */
class Nodo extends Model
{
    use SoftDeletes;

    public $table = "nodos";
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nodo',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nodo' => 'string',
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
