<?php

namespace App\Http\Requests\API;

use App\Models\Linea_Investigacion;
use InfyOm\Generator\Request\APIRequest;

class UpdateLinea_InvestigacionAPIRequest extends APIRequest
{
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Linea_Investigacion::$rules;
    }
}