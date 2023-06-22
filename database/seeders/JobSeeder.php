<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    private array $titles = [
        'Директор',
        'Системный администратор',
        'Дизайнер',
        'Программист',
        'Менеджер',
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->titles as $title) {
            Job::create(['title' => $title]);
        }
    }
}
