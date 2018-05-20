<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;

class UpdateUserRequest extends FormRequest
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
        return [
            'nombres'   => 'required|string|max:100',
            'apellidos'   => 'required|string|max:100',
            'role'      => 'required|string|max:50',
            'email'     => 'required|string|email|max:255|unique:users,email,'.$this->route('usuarios')            
        ];
    }

    public function attributes() {
        return [
            'nombres'   => 'nombres',
            'apellidos'   => 'apellidos',
            'email'     => 'correo/email',
            'password'  => 'contraseña',
        ];
    }
}
