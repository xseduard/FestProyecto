<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class programa extends Model
{
    use SoftDeletes;

    public $table = "programas";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'modalidad',
        'area_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'modalidad' => 'string',
        'area_id' => 'string'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'area_id' => 'required'
    ];
    /**
     * relaciones
     */
    public function area(){
        return $this->belongsTo(Area::class);
    }
}
