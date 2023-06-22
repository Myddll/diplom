<?php

namespace Database\Seeders;

use App\Models\TypeEquip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeEquipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeEquip::factory(1)->create();
    }
}
