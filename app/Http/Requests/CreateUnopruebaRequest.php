<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Unoprueba;

class CreateUnopruebaRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Reglas de validación importadas desde el modelo Unoprueba.
     *
     * @return array
     */
    public function rules()
    {
        return Unoprueba::$rules;
    }
}
