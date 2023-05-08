<?php

namespace App\Interfaces\Repositories;

use App\Models\Cabinet;
use Illuminate\Pagination\LengthAwarePaginator;

interface CabinetRepositoryInterface
{
    public function getAllCabinets(int $paginationSize = 10): LengthAwarePaginator;

    public function getCabinet(int $id): ?Cabinet;

    public function createCabinet(array $data): Cabinet;

    public function updateCabinet(Cabinet $cabinet, array $data): bool;
}