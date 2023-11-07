<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:100'],
            'lastname' =>['required', 'string', 'max:100'],
            'username' =>'required|unique:users,username',
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'telephone' =>'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' =>'required|same:password',
        ];
    }
}
