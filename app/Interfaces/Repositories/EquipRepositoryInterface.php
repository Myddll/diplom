<?php

namespace App\Interfaces\Repositories;

use App\Models\Equip;
use Illuminate\Support\Collection;

interface EquipRepositoryInterface
{
    public function getAllEquips(int $paginationSize = 10): Collection;

    public function createEquip(array $data): Equip;

    public function updateEquip(Equip $equip, array $data): bool;
}