<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employer\EmployerRequest;
use App\Http\Resources\EmployerResource;
use App\Models\Employer;
use App\Services\EmployerService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class EmployerController extends Controller
{
    private EmployerService $service;

    public function __construct(EmployerService $service)
    {
        $this->service = $service;
    }

    public function getEmployers(): AnonymousResourceCollection
    {
        return EmployerResource::collection($this->service->getAllEmployers());
    }

    public function getEmployer(Employer $employer): EmployerResource
    {
        return new EmployerResource($employer);
    }

    public function createEmployer(EmployerRequest $request): EmployerResource
    {
        return new EmployerResource($this->service->createEmployer($request->validated()));
    }

    public function updateEmployer(Employer $employer, EmployerRequest $request): JsonResponse
    {
        return response()->json(['status' => $this->service->updateEmployer($employer, $request->validated())]);
    }

    public function deleteEmployer(Employer $employer): JsonResponse
    {
        return response()->json(['status' => $employer->delete()]);
    }
}
