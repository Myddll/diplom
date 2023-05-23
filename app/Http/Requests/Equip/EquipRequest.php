<?php

namespace App\Http\Requests\Equip;

use App\Models\Equip;
use App\Models\TypeEquip;
use Illuminate\Foundation\Http\FormRequest;

class EquipRequest extends FormRequest
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
            'type_equip_id' => ['required', 'numeric', 'exists:type_equip,id'],
            'title' =>  ['required', 'string', 'min:3', 'max:256'],
            'status' => ['required', 'numeric' ,'in:' . implode(',', array_keys(Equip::STATUS_EQUIP))],
            'computer_id' => ['nullable', 'numeric', 'exclude_without:cabinet_id', 'exists:computers,id'],
            'cabinet_id' => ['nullable', 'numeric', 'exclude_without:computer_id', 'exists:cabinets,id'],
            'specs' => ['required', 'array', function ($attribute, $value, $fail) {
                return $this->checkSpecs($value, $fail);
            }],
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'Это обязательное поле',
            '*.max' => 'Максимальное количество символов равняется :max',
            '*.min' => 'Максимальное количество символов равняется :min',
            '*.string' => 'Неверный формат',
            '*.numeric' => 'Неверный формат',
            '*.array' => 'Неверный формат',
            'cabinet_id.exists' => 'Такого кабинета нет',
            'type_equip.exists' => 'Такой спецификации нет',
            'computers.exists' => 'Такого компьютера нет',
            'status.in' => 'Недопустимое значение статуса',
        ];
    }

    private function checkSpecs($value, $fail)
    {
        if(!$typeEquip = TypeEquip::find($this->request->get('type_equip_id'))) {
            return $fail('Спецификации не существует');
        }
        if(!empty(array_diff(array_keys($value), $typeEquip->specs_fields))) {
            return $fail('Поля типа техники должны совпадать со спецификациями, или не все спецификации были заполнены');
        }
    }
}
