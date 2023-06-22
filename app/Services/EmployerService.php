<?php

namespace App\Services;

use App\Interfaces\Repositories\EmployerRepositoryInterface;
use App\Models\Employer;
use Illuminate\Support\Collection;

class EmployerService
{
    private EmployerRepositoryInterface $repository;

    public function __construct(EmployerRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllEmployers(): Collection
    {
        return $this->repository->getAllEmployers();
    }

    public function createEmployer(array $data): Employer
    {
        return $this->repository->createEmployer($data);
    }

    public function updateEmployer(Employer $employer, array $data): bool
    {
        return $this->repository->updateEmployer($employer, $data);
    }
}