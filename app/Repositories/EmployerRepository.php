<?php

namespace App\Repositories;

use App\Interfaces\Repositories\EmployerRepositoryInterface;
use App\Models\Employer;
use Illuminate\Pagination\LengthAwarePaginator;

class EmployerRepository implements EmployerRepositoryInterface
{
    public function getAllEmployers(int $paginationSize = 10): LengthAwarePaginator
    {
        return Employer::orderByDesc('id')->paginate($paginationSize);
    }

    public function createEmployer(array $data): Employer
    {
        return Employer::create($data);
    }

    public function updateEmployer(Employer $employer, array $data): bool
    {
        return $employer->update($data);
    }
}