<?php

namespace App\Repositories;

use App\Interfaces\Repositories\CabinetRepositoryInterface;
use App\Models\Cabinet;
use Illuminate\Pagination\LengthAwarePaginator;

class CabinetRepository implements CabinetRepositoryInterface
{
    public function getAllCabinets(int $paginationSize = 10): LengthAwarePaginator
    {
        return Cabinet::orderByDesc('id')->paginate($paginationSize);
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