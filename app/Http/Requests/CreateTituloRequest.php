<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Titulo;

class CreateTituloRequest extends Request {

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
     * Reglas de validación importadas desde el modelo Titulo.
     *
     * @return array
     */
     
    }
    public function rules()
    {
        return Titulo::$rules;
    }
}
