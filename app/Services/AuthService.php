<?php

namespace App\Services;

use App\Interfaces\Repositories\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    private UserRepositoryInterface $repository;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function login(array $data): bool
    {
        return auth()->attempt($data);
    }

    public function register(array $data): ?User
    {
        $registerData = $data;
        $registerData['password'] = Hash::make($registerData['password']);

        if (!$this->repository->findByEmail($registerData['email'])){
            return $this->repository->createUser($registerData);
        }
        return null;
    }
}