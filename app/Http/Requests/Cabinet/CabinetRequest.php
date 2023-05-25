<?php

namespace App\Http\Requests\Cabinet;

use Illuminate\Foundation\Http\FormRequest;

class CabinetRequest extends FormRequest
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
        $cabinet = '';
        if ($this->route('cabinet')) {
            $cabinet = $this->route('cabinet')->id;
        }

        return [
            'number' => ['required', 'digits_between:1,3', 'numeric', 'unique:cabinets,number,' . $cabinet,],
            'employee_id' => ['nullable', 'numeric', 'exists:employers,id',]
        ];
    }

    public function messages(): array
    {
        return [
            '*.required' => 'Это обязательное поле',
            '*.min' => ':min минимальное количество символов',
            '*.max' => ':max минимальное количество символов',
            '*.numeric' => 'Значение должно быть числовым',
            'number.unique' => 'Кабинет уже существует',
            'employee_id.exists' => 'Такого сотрудника не существует',
        ];
    }
}
