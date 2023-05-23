<?php

namespace App\Services;

use App\Interfaces\Repositories\TypeEquipRepositoryInterface;
use App\Models\TypeEquip;
use Illuminate\Database\Eloquent\Collection;

class TypeEquipService
{
    private TypeEquipRepositoryInterface $repository;

    public function __construct(TypeEquipRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllTypeEquips(): Collection
    {
        return $this->repository->getAllTypeEquips();
    }

    public function createTypeEquip(array $data): TypeEquip
    {
        return $this->repository->createTypeEquip($data);
    }

    public function updateTypeEquip(TypeEquip $typeEquip, array $data): bool
    {
        return $this->repository->updateTypeEquip($typeEquip, $data);
    }

}