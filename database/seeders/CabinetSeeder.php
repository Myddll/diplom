<?php

namespace Database\Seeders;

use App\Models\Cabinet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CabinetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cabinet::factory(10)->create();
    }
}
