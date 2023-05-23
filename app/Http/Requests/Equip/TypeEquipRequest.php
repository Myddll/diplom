<?php

namespace App\Http\Requests\Equip;

use Illuminate\Foundation\Http\FormRequest;

class TypeEquipRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth('sanctum')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name_type' => ['required', 'string', 'min:3', 'max:256'],
            'specs_fields' => ['required', 'array'],
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'Это обязательное поле',
            '*.max' => 'Максимальное количество символов равняется :max',
            '*.min' => 'Максимальное количество символов равняется :min',
            '*.string' => 'Неверный формат',
            '*.json' => 'Неверный формат',
        ];
    }
}
