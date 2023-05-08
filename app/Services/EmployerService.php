<?php

namespace App\Services;

use App\Interfaces\Repositories\EmployerRepositoryInterface;
use App\Models\Employer;
use Illuminate\Pagination\LengthAwarePaginator;

class EmployerService
{
    private EmployerRepositoryInterface $repository;

    public function __construct(EmployerRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllEmployers(int $paginationSize = 10): LengthAwarePaginator
    {
        return $this->repository->getAllEmployers($paginationSize);
    }

    public function getEmployer(int $id): ?Employer
    {
        return $this->repository->getEmployer($id);
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