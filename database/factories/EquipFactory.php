<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equip>
 */
class EquipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $specs = json_encode([
            'Диоганаль' => '21.5"',
            'Разрешение' => 'Full HD',
            'Тип матрицы' => 'VA',
        ]);
        return [
            'type_equip_id' => 1,
            'title' => 'Xiaomi Redmi Monitor',
            'status' => 1,
            'computer_id' => random_int(1, 5),
            'cabinet_id' => null,
            'specs' => $specs
        ];
    }
}
