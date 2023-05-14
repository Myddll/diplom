<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cabinet\CabinetRequest;
use App\Http\Resources\CabinetResource;
use App\Models\Cabinet;
use App\Services\CabinetService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CabinetController extends Controller
{
    private CabinetService $service;

    public function __construct(CabinetService $service)
    {
        $this->service = $service;
    }

    public function getCabinets(): AnonymousResourceCollection
    {
        return CabinetResource::collection($this->service->getAllCabinets());
    }

    public function getCabinet(Cabinet $cabinet): CabinetResource
    {
        return new CabinetResource($cabinet);
    }

    public function createCabinet(CabinetRequest $request): CabinetResource
    {
        return new CabinetResource($this->service->createEmployer($request->validated()));
    }

    public function updateCabinet(Cabinet $cabinet, CabinetRequest $request): JsonResponse
    {
        return response()->json(['status' => $this->service->updateEmployer($cabinet, $request->validated())]);
    }

    public function deleteCabinet(Cabinet $cabinet): JsonResponse
    {
        return response()->json(['status' => $cabinet->delete()]);
    }
}
