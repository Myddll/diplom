<?php

namespace App\Repositories;

use App\Interfaces\Repositories\EmployerRepositoryInterface;
use App\Models\Employer;
use Illuminate\Support\Collection;

class EmployerRepository implements EmployerRepositoryInterface
{
    public function getAllEmployers(): Collection
    {
        return Employer::orderByDesc('id')->get();
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