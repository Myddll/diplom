<?php

namespace App\Http\Controllers;

use App\Http\Requests\Job\JobRequest;
use App\Services\JobService;
use Illuminate\Http\JsonResponse;

class JobController extends Controller
{
    private JobService $service;

    public function __construct(JobService $service)
    {
        $this->service = $service;
    }

    public function getAllJobs(): JsonResponse
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

    public function updateJob(JobRequest $request): JsonResponse
    {
        return response()->json($this->service->updateJob($request->validated()));
    }

    public function deleteJob(int $id): JsonResponse
    {
        $job = $this->service->getJob($id);
        return response()->json($this->service->deleteJob($job));
    }
}
