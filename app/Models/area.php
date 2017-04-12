<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class area extends Model
{
    use SoftDeletes;

    public $table = "areas";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'decano'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'decano' => 'string'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required'
    ];

    public static function selArea(){
        $ar_area['']= "seleccione...";
        $area = area::all()->toArray();
            foreach ($area as $key => $value) {
                $ar_area[$value['id']]=$value['nombre'];
            }
        return ($ar_area);
    }
}
