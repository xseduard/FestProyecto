<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="municipio",
 *      required={""},
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
 *          property="id_departamento",
 *          description="id_departamento",
 *          type="string"
 *      )
 * )
 */
class municipio extends Model
{
    use SoftDeletes;

    public $table = "municipios";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'id_departamento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'id_departamento' => 'string'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public static function selMunicipio(){
        $array['']= "seleccione...";
        $modelo = municipio::all()->toArray();
            foreach ($modelo as $key => $value) {
                $array[$value['id']]=$value['nombre'];
            }
        return ($array);
    }

    public function departamento(){
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }
}
