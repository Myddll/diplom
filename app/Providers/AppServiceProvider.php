<?php

namespace App\Providers;

use App\Interfaces\Repositories\CabinetRepositoryInterface;
use App\Interfaces\Repositories\ComputerRepositoryInterface;
use App\Interfaces\Repositories\EmployerRepositoryInterface;
use App\Interfaces\Repositories\EquipRepositoryInterface;
use App\Interfaces\Repositories\JobRepositoryInterface;
use App\Interfaces\Repositories\TypeEquipRepositoryInterface;
use App\Interfaces\Repositories\UserRepositoryInterface;
use App\Repositories\CabinetRepository;
use App\Repositories\ComputerRepository;
use App\Repositories\EmployerRepository;
use App\Repositories\EquipRepositroy;
use App\Repositories\JobRepository;
use App\Repositories\TypeEquipRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(EmployerRepositoryInterface::class, EmployerRepository::class);
        $this->app->bind(JobRepositoryInterface::class, JobRepository::class);
        $this->app->bind(CabinetRepositoryInterface::class, CabinetRepository::class);
        $this->app->bind(ComputerRepositoryInterface::class, ComputerRepository::class);
        $this->app->bind(EquipRepositoryInterface::class, EquipRepositroy::class);
        $this->app->bind(TypeEquipRepositoryInterface::class, TypeEquipRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
