<?php

namespace App\Http\Controllers;

use App\Http\Requests\Job\JobRequest;
use App\Models\Job;
use App\Services\JobService;
use Illuminate\Http\JsonResponse;

class JobController extends Controller
{
    private JobService $service;

    public function __construct(JobService $service)
    {
        $this->service = $service;
    }

    public function getJobs(): JsonResponse
    {
        return response()->json($this->service->getAllJobs());
    }

    public function getJob(int $id): JsonResponse
    {
        return response()->json($this->service->getJob($id));
    }

    public function createJob(JobRequest $request): JsonResponse
    {
        return response()->json($this->service->createJob($request->validated()));
    }

    public function updateJob(Job $job, JobRequest $request): JsonResponse
    {
        return response()->json(['status' => $this->service->updateJob($job, $request->validated())]);
    }

    public function deleteJob(Job $job): JsonResponse
    {
        return response()->json(['status' => $job->delete()]);
    }
}
