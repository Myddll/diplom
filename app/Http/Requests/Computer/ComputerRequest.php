<?php

namespace App\Http\Requests\Computer;

use Illuminate\Foundation\Http\FormRequest;

class ComputerRequest extends FormRequest
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
            'cabinet_id' => ['nullable', 'numeric', 'exists:cabinets,id'],
            'processor' => ['required', 'string', 'max:255'],
            'motherboard' => ['required', 'string', 'max:255'],
            'ram' => ['required', 'string', 'max:255'],
            'power_unit' => ['required', 'string', 'max:255'],
            'memory' => ['required', 'string', 'max:255'],
            'videocard' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'Это обязательное поле',
            'cabinet_id.exists' => 'Такого кабинета нет',
            '*.max' => 'Максимальное количество символов равняется :max',
            '*.string' => 'Неверный формат',
            '*.numeric' => 'Неверный формат',
        ];
    }
}
