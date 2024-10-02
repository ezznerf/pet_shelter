<?php

use App\Http\Controllers\Api\ShelterController;
use App\Http\Controllers\Api\TypeHelpController;
use App\Http\Controllers\Api\UrgentHelpController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PetsController;
use App\Http\Controllers\Api\FormConroller;

use App\Http\Controllers\Api\VolunteeringController;
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

Route::get('volunteering', [VolunteeringController::class, 'index'])->name('api.volunteering');

Route::get('type_help', [TypeHelpController::class, 'index'])->name('api.type_help');

Route::get('urgent_help', [UrgentHelpController::class, 'index'])->name('api.urgent_help');
