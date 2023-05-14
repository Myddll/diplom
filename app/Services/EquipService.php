<?php

namespace App\Services;

use App\Interfaces\Repositories\EquipRepositoryInterface;
use App\Models\Equip;
use Illuminate\Pagination\LengthAwarePaginator;

class EquipService
{
    private EquipRepositoryInterface $repository;

    public function __construct(EquipRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllEquips(int $paginationSize = 10): LengthAwarePaginator
    {
        return $this->repository->getAllEquips($paginationSize);
    }

    public function createEquip(array $data): Equip
    {
        return $this->repository->createEquip($data);
    }

    public function updateEquip(Equip $equip, array $data): bool
    {
        return $this->repository->updateEquip($equip, $data);
    }
}