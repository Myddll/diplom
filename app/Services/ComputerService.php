<?php

namespace App\Services;

use App\Interfaces\Repositories\ComputerRepositoryInterface;
use App\Models\Computer;
use Illuminate\Support\Collection;

class ComputerService
{
    private ComputerRepositoryInterface $repository;

    public function __construct(ComputerRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllComputer(): Collection
    {
        return $this->repository->getAllComputer();
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