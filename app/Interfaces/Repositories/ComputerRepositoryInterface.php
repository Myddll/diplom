<?php

namespace App\Interfaces\Repositories;

use App\Models\Computer;
use Illuminate\Support\Collection;

interface ComputerRepositoryInterface
{
    public function getAllComputer(int $paginationSize = 10): Collection;

    public function createComputer(array $data): Computer;

    public function updateComputer(Computer $computer, array $data): bool;
}