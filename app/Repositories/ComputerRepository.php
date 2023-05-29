<?php

namespace App\Repositories;

use App\Interfaces\Repositories\ComputerRepositoryInterface;
use App\Models\Computer;
use Illuminate\Pagination\LengthAwarePaginator;

class ComputerRepository implements ComputerRepositoryInterface
{
    public function getAllComputer(int $paginationSize = 10): LengthAwarePaginator
    {
        return Computer::orderByDesc('id')->paginate($paginationSize);
    }

    public function createComputer(array $data): Computer
    {
        return Computer::create($data);
    }

    public function updateComputer(Computer $computer, array $data): bool
    {
        return $computer->update($data);
    }
}