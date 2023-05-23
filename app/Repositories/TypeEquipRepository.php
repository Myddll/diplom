<?php

namespace App\Repositories;

use App\Interfaces\Repositories\TypeEquipRepositoryInterface;
use App\Models\TypeEquip;
use Illuminate\Database\Eloquent\Collection;

class TypeEquipRepository implements TypeEquipRepositoryInterface
{
    public function getAllTypeEquips(): Collection
    {
        return TypeEquip::all();
    }

    public function createTypeEquip(array $data): TypeEquip
    {
        return TypeEquip::create($data);
    }

    public function updateTypeEquip(TypeEquip $typeEquip, array $data): bool
    {
        return $typeEquip->update($data);
    }
}