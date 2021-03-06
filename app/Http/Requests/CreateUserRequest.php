<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;

class CreateUserRequest extends FormRequest
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
            'apellidos' => 'required|string|max:100',
            'role'      => 'required|string|max:50',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:6|confirmed',
        ];
    }

    public function attributes() {
        return [
            'nombres'   => 'nombres',
            'apellidos'   => 'apellidos',
            'role'   => 'rol',
            'email'     => 'correo/email',
            'password'  => 'contraseña',
        ];
    }

}
