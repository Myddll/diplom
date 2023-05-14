<?php

namespace App\Repositories;

use App\Interfaces\Repositories\EquipRepositoryInterface;
use App\Models\Equip;
use Illuminate\Pagination\LengthAwarePaginator;

class EquipRepositroy implements EquipRepositoryInterface
{
    public function getAllEquips(int $paginationSize = 10): LengthAwarePaginator
    {
        return Equip::orderByDesc('id')->paginate($paginationSize);
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