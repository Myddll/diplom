<?php

namespace App\Http\Requests\Job;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:3', 'max:64'],
        ];
    }

    public function messages(): array
    {
        return [
            '*.required' => 'Это обязательное полей',
            '*.max' => 'Максимум :max символов',
            '*.min' => 'Минимум :min символов',
        ];
    }
}
