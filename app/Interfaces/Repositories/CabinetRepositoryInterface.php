<?php

namespace App\Interfaces\Repositories;

use App\Models\Cabinet;
use Illuminate\Support\Collection;

interface CabinetRepositoryInterface
{
    public function getAllCabinets(int $paginationSize = 10): Collection;

    public function createCabinet(array $data): Cabinet;

    public function updateCabinet(Cabinet $cabinet, array $data): bool;
}