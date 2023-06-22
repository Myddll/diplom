<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            JobSeeder::class,
            EmployerSeeder::class,
            CabinetSeeder::class,
            ComputerSeeder::class,
            TypeEquipSeeder::class,
            EquipSeeder::class,
            ProgramSeeder::class
        ]);
    }
}
