<?php

namespace App\Http\Requests\Programs;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class ProgramRequest extends FormRequest
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
            'title' => ['required', 'string', 'min:3', 'max:256', 'unique:programs,title'],
            'date' => ['nullable', 'date', 'after_or_equal:' . Carbon::now()->format('Y-m-d')],
        ];
    }

    public function messages(): array
    {
        return [
            '*.required' => 'Это обязательное поле',
            '*.string' => 'Неверный формат',
            '*.date' => 'Поле должно быть датой',
            '*.min' => ':min минимальное количество символов',
            '*.max' => ':max максимальное количество символов',
            'title.unique' => 'Такая программа уже существует',
            'date.after_or_equal' => 'Дата должна быть позже или равна сегоднешнему дню',
        ];
    }
}
