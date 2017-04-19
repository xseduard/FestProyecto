<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Titulo",
 *      required={"titulo"},
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
 *          property="capitulo",
 *          description="capitulo",
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
class Titulo extends Model
{
    use SoftDeletes;

    public $table = "titulos";
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo',
        'titulo',
        'capitulo'
    ];

    /**
     * The attributes that should be casted to native types. 
     * (señala el tipo de atributo)
     *
     * @var array
     */
    protected $casts = [
        'codigo'=> 'string',
        'titulo' => 'string',
        'capitulo' => 'string'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        'codigo' => 'required',
        'titulo' => 'required'
    ];

     /**
     * seleccionadores
     */

     public static function selTitulos(){
        //$array['']= "seleccione...";
        $modelo = Titulo::all()->toArray();
            foreach ($modelo as $key => $value) {      

                $array[$value['codigo']]=$value['titulo'];
               
            }
            return ($array);
           }
    public static function infoTitulos(){
        //$array['']= "seleccione...";
        $modelo = Titulo::all()->toArray();
            foreach ($modelo as $key => $value) {                
                $array[$value['codigo']]=['titulo' => $value['titulo'], 'capitulo' => $value['capitulo']];
               
            }
           
        return ($array);
    }
}
