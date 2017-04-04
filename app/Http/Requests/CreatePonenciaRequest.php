<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Ponencia;

class CreatePonenciaRequest extends Request {

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
     * Reglas de validación importadas desde el modelo Ponencia.
     *
     * @return array
     */
     
    }
    public function rules()
    {
        return Ponencia::$rules;
    }
}
