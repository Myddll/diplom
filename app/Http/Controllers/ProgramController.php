<?php

namespace App\Http\Controllers;

use App\Http\Requests\Programs\ProgramPaidRequest;
use App\Http\Requests\Programs\ProgramRequest;
use App\Http\Resources\ProgramResource;
use App\Models\Program;
use App\Services\ProgramService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProgramController extends Controller
{
    private ProgramService $service;

    public function __construct(ProgramService $service)
    {
        $this->service = $service;
    }

    public function getProgram(Program $program): ProgramResource
    {
        return new ProgramResource($program);
    }

    public function getAllPrograms(): AnonymousResourceCollection
    {
        return ProgramResource::collection($this->service->getAllPrograms());
    }

    public function createProgram(ProgramRequest $request): ProgramResource
    {
        return new ProgramResource($this->service->createProgram($request->validated()));
    }

    public function updateProgram(Program $program, ProgramPaidRequest $request): JsonResponse
    {
        return response()->json($this->service->updateProgram($program, $request->validated()));
    }

    public function deleteProgram(Program $program): JsonResponse
    {
        return response()->json($program->delete());
    }
}
