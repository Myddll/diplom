<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cabinet_id' => random_int(1,10),
            'processor' => 'AMD Ryzen 5 2600X',
            'motherboard' => 'Asrock X470 TAICHI',
            'ram' => 'Kingston HyperX 2*8gb DDR4 3200MHz',
            'power_unit' => 'Cooler Master Elite V4 650W',
            'memory' => 'SSD Apacer Panther 480gb',
            'videocard' => 'ASUS GeForce RTX 2060 Super TUF',
        ];
    }
}
