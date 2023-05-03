<?php

namespace App\Interfaces\Repositories;

use App\Models\Job;
use Illuminate\Support\Collection;

interface JobRepositoryInterface
{
    public function getAllJob(): Collection;

    public function getJob(int $id): Job;

    public function createJob(array $data): Job;

    public function updateJob(Job $job, array $data): bool;
}