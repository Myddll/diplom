<?php

namespace App\Http\Controllers;

use App\Http\Requests\Equip\EquipRequest;
use App\Http\Requests\Equip\TypeEquipRequest;
use App\Http\Resources\EquipResource;
use App\Models\Equip;
use App\Models\TypeEquip;
use App\Services\EquipService;
use App\Services\TypeEquipService;
use Illuminate\Http\JsonResponse;

class EquipController extends Controller
{
    private EquipService $equipService;
    private TypeEquipService $typeEquipService;

    public function __construct(TypeEquipService $typeEquipService,
                                EquipService     $equipService)
    {
        $this->typeEquipService = $typeEquipService;
        $this->equipService = $equipService;
    }

    public function getAllEquips(): JsonResponse
    {
        return response()->json(EquipResource::collection($this->equipService->getAllEquips()));
    }

    public function getAllTypeEquips(): JsonResponse
    {
        return response()->json($this->typeEquipService->getAllTypeEquips());
    }

    public function getEquip(Equip $equip)
    {
        return response()->json(new EquipResource($equip));
    }

    public function getTypeEquip(TypeEquip $typeEquip)
    {
        return response()->json($typeEquip);
    }

    public function createEquip(EquipRequest $request)
    {
        return response()->json(new EquipResource($this->equipService->createEquip($request->validated())));
    }

    public function createTypeEquip(TypeEquipRequest $request)
    {
        return response()->json($this->typeEquipService->createTypeEquip($request->validated()));
    }

    public function updateEquip(Equip $equip, EquipRequest $request)
    {
        return response()->json($this->equipService->updateEquip($equip, $request->validated()));
    }

    public function updateTypeEquip(TypeEquip $typeEquip, TypeEquipRequest $request)
    {
        return response()->json($this->typeEquipService->updateTypeEquip($typeEquip, $request->validated()));
    }

    public function deleteEquip(Equip $equip)
    {
        return response()->json($equip->delete());
    }
}
