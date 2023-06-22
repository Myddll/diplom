<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TypeEquip>
 */
class TypeEquipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $specs = json_encode([
            'Тип матрицы',
            'Разрешение',
            'Диоганаль',
        ]);
        return [
            'name_type' => 'Монитор',
            'specs_fields' => $specs
        ];
    }
}
