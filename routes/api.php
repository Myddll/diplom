<?php

use App\Http\Controllers\CabinetController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/




Route::group(['prefix' => 'auth'], function () {
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/register', [UserController::class, 'register']);
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/logout', [UserController::class, 'logout']);
        Route::get('/me', function (Request $request) {
            return $request->user();
        });
        Route::get('/logout-all', [UserController::class, 'logoutFromAllDevice']);
    });
});
Route::middleware('auth:sanctum')->group(function () {
    Route::group(['prefix' => 'job'], function () {
        Route::get('/', [JobController::class, 'getJobs']);
        Route::get('/{job}', [JobController::class, 'getJob']);
        Route::post('/', [JobController::class, 'createJob']);
        Route::put('/{job}', [JobController::class, 'updateJob']);
        Route::delete('/{job}', [JobController::class, 'deleteJob']);
    });
    Route::group(['prefix' => 'employer'], function () {
        Route::get('/', [EmployerController::class, 'getEmployers']);
        Route::get('/{employer}', [EmployerController::class, 'getEmployer']);
        Route::post('/', [EmployerController::class, 'createEmployer']);
        Route::put('/{employer}', [EmployerController::class, 'updateEmployer']);
        Route::delete('/{employer}', [EmployerController::class, 'deleteEmployer']);
    });
    Route::group(['prefix' => 'cabinet'], function () {
        Route::get('/', [CabinetController::class, 'getCabinets']);
        Route::get('/{cabinet}', [CabinetController::class, 'getCabinet']);
        Route::post('/', [CabinetController::class, 'createCabinet']);
        Route::put('/{cabinet}', [CabinetController::class, 'updateCabinet']);
        Route::delete('/{cabinet}', [CabinetController::class, 'deleteCabinet']);
    });
    Route::group(['prefix' => 'computer'], function () {
        Route::get('/', [ComputerController::class, 'getComputers']);
        Route::get('/{computer}', [ComputerController::class, 'getComputer']);
        Route::post('/', [ComputerController::class, 'createComputer']);
        Route::put('/{computer}', [ComputerController::class, 'updateComputer']);
        Route::delete('/{computer}', [ComputerController::class, 'deleteComputer']);
    });
});
