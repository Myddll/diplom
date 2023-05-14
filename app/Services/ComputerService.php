<?php

namespace App\Services;

use App\Interfaces\Repositories\ComputerRepositoryInterface;
use App\Models\Computer;
use Illuminate\Pagination\LengthAwarePaginator;

class ComputerService
{
    private ComputerRepositoryInterface $repository;

    public function __construct(ComputerRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllComputer(int $paginationSize = 10): LengthAwarePaginator
    {
        return $this->repository->getAllComputer($paginationSize);
    }

    public function createComputer(array $data): Computer
    {
        return  $this->repository->createComputer($data);
    }

    public function updateComputer(Computer $computer, array $data): bool
    {
        return $this->repository->updateComputer($computer, $data);
    }
}