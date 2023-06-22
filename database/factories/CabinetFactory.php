<?php

namespace Database\Factories;

use App\Models\Cabinet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cabinet>
 */
class CabinetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "number" => $this->generateNumber(),
            "employee_id" => random_int(1, 20),
        ];
    }

    private function generateNumber(): int
    {
        $cabinetNumber = random_int(100, 999);

        if (Cabinet::where('number', '=', $cabinetNumber)->exists()) {
            return $this->generateNumber();
        }

        return $cabinetNumber;
    }
}
