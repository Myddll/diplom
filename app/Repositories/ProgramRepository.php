<?php

namespace App\Repositories;

use App\Models\Program;
use Illuminate\Database\Eloquent\Collection;
use App\Interfaces\Repositories\ProgramRepositoryInterface;

class ProgramRepository implements ProgramRepositoryInterface
{
    public function getAllPrograms(): Collection
    {
        return Program::all();
    }

    public function createProgram(array $data): Program
    {
        return Program::create($data);
    }

    public function updateProgram(Program $program, array $data): bool
    {
        return $program->update($data);
    }
}