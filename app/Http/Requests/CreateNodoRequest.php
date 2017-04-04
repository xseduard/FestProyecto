<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Nodo;

class CreateNodoRequest extends Request {

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
     * Reglas de validación importadas desde el modelo Nodo.
     *
     * @return array
     */
     
    }
    public function rules()
    {
        return Nodo::$rules;
    }
}
