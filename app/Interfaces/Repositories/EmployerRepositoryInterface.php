<?php

namespace App\Interfaces\Repositories;

use App\Models\Employer;
use Illuminate\Pagination\LengthAwarePaginator;

interface EmployerRepositoryInterface
{
    public function getAllEmployers(int $paginationSize = 10): LengthAwarePaginator;

    public function getEmployer(int $id): ?Employer;

    public function createEmployer(array $data): Employer;

    public function updateEmployer(Employer $employer, array $data): bool;
}