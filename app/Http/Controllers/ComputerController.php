<?php

namespace App\Http\Controllers;

use App\Http\Requests\Computer\ComputerRequest;
use App\Http\Resources\ComputerResource;
use App\Models\Computer;
use App\Services\ComputerService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ComputerController extends Controller
{
    private ComputerService $service;

    public function __construct(ComputerService $service)
    {
        $this->service = $service;
    }

    public function getComputer(Computer $computer): ComputerResource
    {
        return new ComputerResource($computer);
    }

    public function getComputers(): AnonymousResourceCollection
    {
        return ComputerResource::collection($this->service->getAllComputer());
    }

    public function createComputer(ComputerRequest $request): ComputerResource
    {
        return new ComputerResource($this->service->createComputer($request->validated()));
    }

    public function updateComputer(Computer $computer, ComputerRequest $request): JsonResponse
    {
        return response()->json(['status' => $this->service->updateComputer($computer, $request->validated())]);
    }

    public function deleteComputer(Computer $computer): JsonResponse
    {
        return response()->json(['status' => $computer->delete()]);
    }
}
