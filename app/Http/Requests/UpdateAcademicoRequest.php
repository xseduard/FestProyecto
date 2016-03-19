<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Academico;

class UpdateAcademicoRequest extends Request {

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
     * Reglas de validación importadas desde el modelo Academico.
     *
     * @return array
     */
    public function rules()
    {
        return Academico::$rules;
    }
}
