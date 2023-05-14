<?php

namespace App\Services;

use App\Interfaces\Repositories\JobRepositoryInterface;
use App\Models\Job;
use Illuminate\Support\Collection;

class JobService
{
    private JobRepositoryInterface $repository;

    public function __construct(JobRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllJobs(): Collection|Job
    {
        return $this->repository->getAllJobs();
    }

    public function createJob(array $data): Job
    {
        return $this->repository->createJob($data);
    }

    public function updateJob(Job $job, array $data): bool
    {
        return $this->repository->updateJob($job, $data);
    }
}