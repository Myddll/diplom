<?php

namespace App\Interfaces\Repositories;

use App\Models\TypeEquip;
use Illuminate\Database\Eloquent\Collection;

interface TypeEquipRepositoryInterface
{
    public function getAllTypeEquips(): Collection;

    public function createTypeEquip(array $data): TypeEquip;

    public function updateTypeEquip(TypeEquip $typeEquip, array $data): bool;
}