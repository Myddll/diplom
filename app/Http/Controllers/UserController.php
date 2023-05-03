<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserLoginRequest;
use App\Http\Requests\User\UserRegisterRequest;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private AuthService $service;

    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    public function login(UserLoginRequest $request): JsonResponse
    {
        $data = $request->validated();

        if ($this->service->login($data)) {
            $userToken = Auth::user()->createToken('user_token')->plainTextToken;

            return response()->json([
                'access_token' => $userToken,
                'token_type' => 'Bearer',
            ]);
        }

        return response()->json(['message' => 'Неправильный логин или пароль'], 401);
    }

    public function register(UserRegisterRequest $request): JsonResponse
    {
        $data = $request->validated();
        $user = $this->service->register($data);

        if ($user) {
            $userToken = $user->createToken('user_token')->plainTextToken;

            return response()->json([
                'access_token' => $userToken,
                'token_type' => 'Bearer',
            ]);
        }

        return response()->json(['message' => 'Ошибка при регистрации'], 401);
    }

    public function me(Request $request): JsonResponse
    {
        return response()->json($request->user());
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Success']);
    }

    public function logoutFromAllDevice(Request $request): JsonResponse
    {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Success']);
    }
}
