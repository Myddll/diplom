<?php

namespace App\Repositories;

use App\Interfaces\Repositories\CabinetRepositoryInterface;
use App\Models\Cabinet;
use Illuminate\Support\Collection;

class CabinetRepository implements CabinetRepositoryInterface
{
    public function getAllCabinets(int $paginationSize = 10): Collection
    {
        return Cabinet::orderByDesc('id')->get($paginationSize);
    }

    public function createCabinet(array $data): Cabinet
    {
        return Cabinet::create($data);
    }

    public function updateCabinet(Cabinet $cabinet, array $data): bool
    {
        return $cabinet->update($data);
    }
}