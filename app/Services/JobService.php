<?php

namespace App\Services;

use App\Interfaces\Repositories\JobRepositoryInterface;
use Illuminate\Support\Collection;
use App\Models\Job;

class JobService
{
    private JobRepositoryInterface $repository;

    public function __construct(JobRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getJob(int $id): ?Job
    {
        return $this->repository->getJob($id);
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

    public function deleteJob(Job $job): bool
    {
        return $this->repository->deleteJob($job);
    }
}