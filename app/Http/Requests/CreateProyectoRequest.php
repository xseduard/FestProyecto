<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Proyecto;

class CreateProyectoRequest extends Request {

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
    
        return Proyecto::$name_attributes;

    /**
     * Reglas de validación importadas desde el modelo Proyecto.
     *
     * @return array
     */
     
    }
    public function rules()
    {
        return Proyecto::$rules;
    }
}
