<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
