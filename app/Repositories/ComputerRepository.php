<?php

namespace App\Repositories;

use App\Interfaces\Repositories\ComputerRepositoryInterface;
use App\Models\Computer;
use Illuminate\Support\Collection;

class ComputerRepository implements ComputerRepositoryInterface
{
    public function getAllComputer(): Collection
    {
        return Computer::orderByDesc('id')->get();
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