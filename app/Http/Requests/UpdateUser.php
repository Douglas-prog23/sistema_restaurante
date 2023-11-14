<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string','regex:/^[^\d]+$/', 'max:50'],
            'lastname' =>['required', 'string','regex:/^[^\d]+$/', 'max:50'],
            'username' =>'required|max:20|regex:/^[^\s]+$/|unique:users,username,' .$this->user->id,
            'email' => 'required|string|email|regex:/^[^\s]+$/|max:40|unique:users,email,' .$this->user->id,
            'telephone' => 'required|min:8', /* |digits:8| */

        ];
    }
    public function messages(): array
    {
        return [
            'username.unique' => 'Este nombre de usuario ya existe.(No disponible)',
            'username.regex' => 'El campo username no debe contener espacios en blanco.',
            'email.regex' => 'El campo Email no debe contener espacios.',
            'email.unique' => 'Correo electronico ya registrado.(No disponible)',
            'name.regex' => 'El campo Nombres no debe contener numeros.',
            'lastname.regex' => 'El campo Apellidos no debe contener numeros.',
            'lastname.max' => 'El campo Apellidos no debe ser mayor que 50 caracteres.',
        ];
    }
}
