<?php

namespace App\Http\Requests\Programs;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class ProgramPaidRequest extends FormRequest
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
            'date' => ['required', 'date', 'after_or_equal:' . Carbon::now()->format('Y-m-d')],
        ];
    }

    public function messages(): array
    {
        return [
            '*.required' => 'Это обязательное поле',
            '*.date' => 'Поле должно быть датой',
            'date.after_or_equal' => 'Дата должна быть позже или равна сегоднешнему дню',
        ];
    }
}
