<?php

namespace App\Services;

use App\Interfaces\Repositories\ProgramRepositoryInterface;
use App\Models\Program;
use Illuminate\Database\Eloquent\Collection;


class ProgramService
{
    private ProgramRepositoryInterface $repository;

    public function __construct(ProgramRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllPrograms(): Collection
    {
        return $this->repository->getAllPrograms();
    }

    public function createProgram(array $data): Program
    {
        return $this->repository->createProgram($data);
    }

    public function updateProgram(Program $program, array $data): bool
    {
        return $this->repository->updateProgram($program, $data);
    }
}