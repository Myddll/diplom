<?php

namespace App\Repositories;

use App\Interfaces\Repositories\JobRepositoryInterface;
use App\Models\Job;
use Illuminate\Support\Collection;

class JobRepository implements JobRepositoryInterface
{
    public function getAllJobs(): Collection|Job
    {
        return Job::all();
    }

    public function getJob(int $id): ?Job
    {
        return Job::find($id);
    }

    public function createJob(array $data): Job
    {
        return Job::create($data);
    }

    public function updateJob(Job $job, array $data): bool
    {
        return $job->update($data);
    }
}