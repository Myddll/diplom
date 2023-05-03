<?php

namespace App\Services;

use App\Interfaces\Repositories\JobRepositoryInterface;
use App\Models\Job;

class JobService
{
    private JobRepositoryInterface $repository;

    public function __construct(JobRepositoryInterface $repository)
    {
        $this->repository = $repository;
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