<?php

use App\Http\Controllers\Api\ShelterController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::apiResource('shelters', ShelterController::class);

Route::get('shelters', [ShelterController::class, 'index'])->name('api.shelters');
Route::get('shelters/{shelter}', [ShelterController::class, 'show'])->name('api.shelters.show');

Route::get('users/{user}', [UserController::class, 'index'])->name('api.user');
