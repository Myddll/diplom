<?php

namespace App\Repositories;

use App\Interfaces\Repositories\EquipRepositoryInterface;
use App\Models\Equip;
use Illuminate\Support\Collection;

class EquipRepositroy implements EquipRepositoryInterface
{
    public function getAllEquips(int $paginationSize = 10): Collection
    {
        return Equip::orderByDesc('id')->get($paginationSize);
    }

    public function createEquip(array $data): Equip
    {
        return Equip::create($data);
    }

    public function updateEquip(Equip $equip, array $data): bool
    {
        return $equip->update($data);
    }
}