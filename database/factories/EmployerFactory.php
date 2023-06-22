<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_id' => random_int(1, 5),
            'telephone' => random_int(70000000000,79999999999),
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'date_birth' => fake()->date()
        ];
    }
}
