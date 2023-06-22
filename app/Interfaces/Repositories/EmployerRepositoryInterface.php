<?php

namespace App\Interfaces\Repositories;

use App\Models\Employer;
use Illuminate\Support\Collection;

interface EmployerRepositoryInterface
{
    public function getAllEmployers(): Collection;

    public function createEmployer(array $data): Employer;

    public function updateEmployer(Employer $employer, array $data): bool;
}