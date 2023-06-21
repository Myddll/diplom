<?php

namespace App\Http\Requests\Employer;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class EmployerRequest extends FormRequest
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
            'job_id' => ['required', 'exists:jobs,id', 'numeric'],
            'telephone' => ['required', 'digits_between:11,11', 'numeric', 'unique:employers,telephone,' . $this->route('employer')?->id ?? '',],
            'firstname' => ['required', 'min:2', 'max:64', 'string',],
            'lastname' => ['required', 'min:2', 'max:64', 'string',],
            'date_birth' => ['required', 'date', 'before:' . Carbon::now()->toDateString(),],
        ];
    }

    public function messages(): array
    {
        return [
            '*.required' => 'Это обязательное поле',
            '*.min' => ':min минимальное количество символов',
            '*.max' => ':max максимальное количество символов',
            'telephone.digits_between' => 'Неверный формат телефона',
            '*.string' => 'Значение должно быть строкой',
            '*.numeric' => 'Значение должно быть числом',
            'job_id.exists' => 'Такой должности не существует',
            'telephone.unique' => 'Сотрудник с таким номером телефона уже существует',
            'date_birth.date' => 'Значение должно быть датой',
            'date_birth.before' => 'Сотрудник должен родится, перед тем как его добавить -_-...',
        ];
    }
}
