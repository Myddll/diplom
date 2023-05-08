<?php

namespace App\Repositories;

use App\Interfaces\Repositories\CabinetRepositoryInterface;
use App\Models\Cabinet;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class CabinetRepository implements CabinetRepositoryInterface
{
    public function getAllCabinets(int $paginationSize = 10): LengthAwarePaginator
    {
        return Cabinet::orderByDesc('id')->paginate($paginationSize);
    }

    public function getCabinet(int $id): ?Cabinet
    {
        return Cabinet::find($id);
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