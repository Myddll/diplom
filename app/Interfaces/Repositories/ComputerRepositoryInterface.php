<?php

namespace App\Interfaces\Repositories;

use App\Models\Cabinet;
use App\Models\Computer;
use Illuminate\Pagination\LengthAwarePaginator;

interface ComputerRepositoryInterface
{
    public function getAllComputer(int $paginationSize = 10): LengthAwarePaginator;

    public function createComputer(array $data): Computer;

    public function updateComputer(Computer $computer, array $data): bool;
}