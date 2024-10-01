<?php

use App\Http\Controllers\Api\ShelterController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PetsController;
use App\Http\Controllers\Api\FormConroller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::apiResource('shelters', ShelterController::class);

Route::get('shelters', [ShelterController::class, 'index'])->name('api.shelters');
Route::get('shelters/{shelter}', [ShelterController::class, 'show'])->name('api.shelters.show');

Route::get('users/{user}', [UserController::class, 'index'])->name('api.user');

Route::get('pets', [PetsController::class, 'index'])->name('api.pets');
Route::get('pets/{pet}', [PetsController::class, 'show'])->name('api.pets.show');

Route::get('forms', [FormConroller::class, 'index'])->name('api.forms.show');