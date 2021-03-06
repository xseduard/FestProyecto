<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Estudiante;

class CreateEstudianteRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

   public function attributes() {
        return [

         "" => "",
         "" => "",
    
        ];

    /**
     * Reglas de validación importadas desde el modelo Estudiante.
     *
     * @return array
     */
     
    }
    public function rules()
    {
        $rulescreate = Estudiante::$rules;
        $rulescreate['cedula'] .= '|unique:jurados';
        
        return $rulescreate;
        
    }
}
