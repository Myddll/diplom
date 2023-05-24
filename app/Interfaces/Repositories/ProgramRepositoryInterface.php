<?php


namespace App\Interfaces\Repositories;


use App\Models\Program;
use Illuminate\Database\Eloquent\Collection;

interface ProgramRepositoryInterface
{
    public function getAllPrograms(): Collection;

    public function createProgram(array $data): Program;

    public function updateProgram(Program $program, array $data): bool;
}