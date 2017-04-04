<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Docente;

class CreateDocenteRequest extends Request {

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

         'formacion' => 'formacion',
        'id_academico' => 'cedula'
    
        ];

    /**
     * Reglas de validación importadas desde el modelo Docente.
     *
     * @return array
     */
     
    }
    public function rules()
    {
        return Docente::$rules;
    }
}
