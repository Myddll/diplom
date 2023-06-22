<?php

namespace App\Services;

use App\Interfaces\Repositories\CabinetRepositoryInterface;
use App\Models\Cabinet;
use Illuminate\Support\Collection;

class CabinetService
{
    private CabinetRepositoryInterface $repository;

    public function __construct(CabinetRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllCabinets(int $paginationSize = 10): Collection
    {
        return $this->repository->getAllCabinets($paginationSize);
    }

    public function createEmployer(array $data): Cabinet
    {
        return $this->repository->createCabinet($data);
    }

    public function updateEmployer(Cabinet $cabinet, array $data): bool
    {
        return $this->repository->updateCabinet($cabinet, $data);
    }
}