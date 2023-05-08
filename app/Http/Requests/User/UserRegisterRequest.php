<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth('sanctum')->guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "name" => ['required', 'string'],
            'email' => ['required', 'email', 'string', 'unique:users,email'],
            'password' => ['required', 'min:8', 'confirmed']
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'Это обязательное полей',
            'email.unique' => 'Пользователь с таким email уже существует',
            '*.min' => 'Минимум :min символов',
            'password.confirmed' => 'Пароли не сходятся',
        ];
    }
}
