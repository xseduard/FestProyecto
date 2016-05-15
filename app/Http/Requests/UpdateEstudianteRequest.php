<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Estudiante;

class UpdateEstudianteRequest extends Request {

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
    }

    /**
     * Reglas de validación importadas desde el modelo Estudiante.
     *
     * @return array
     */
    public function rules()
    {
        return Estudiante::$rules;
    }
}
