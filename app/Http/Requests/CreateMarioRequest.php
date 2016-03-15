<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Mario;

class CreateMarioRequest extends Request {

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
     * Reglas de validación importadas desde el modelo Mario.
     *
     * @return array
     */
    public function rules()
    {
        return Mario::$rules;
    }
}
