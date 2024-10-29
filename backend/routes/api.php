<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ShelterController;
use App\Http\Controllers\Api\TypeHelpController;
use App\Http\Controllers\Api\UrgentHelpController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PetsController;
use App\Http\Controllers\Api\FormConroller;
use \App\Http\Controllers\Api\VerifyEmailController;

use App\Http\Controllers\Api\VolunteeringController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::get('/email/verify', function () {
//    return view('email-verification');
//})->middleware('auth')->name('verification.notice');

Route::post('register', [AuthController::class, 'register'])->name('api.register');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'anime'])->name('verification.verify');
Route::middleware('')->group(function () { //auth:sanctum
    Route::get('shelters', [ShelterController::class, 'index'])->name('api.shelters');
    Route::get('shelters/{shelter}', [ShelterController::class, 'show'])->name('api.shelters.show');

    Route::get('user', [UserController::class, 'index'])->name('api.user');

    Route::get('pets', [PetsController::class, 'index'])->name('api.pets');
    Route::get('pets/{pet}', [PetsController::class, 'show'])->name('api.pets.show');

    Route::get('forms', [FormConroller::class, 'index'])->name('api.forms');
    Route::post('forms', [FormConroller::class, 'store'])->name('api.forms.store');
    Route::get('forms/{form}', [FormConroller::class, 'show'])->name('api.forms.show');
    Route::put('forms/{form}', [FormConroller::class, 'update'])->name('api.forms.update');
    Route::delete('forms/{form}', [FormConroller::class, 'destroy'])->name('api.forms.destroy');

    Route::get('volunteering', [VolunteeringController::class, 'index'])->name('api.volunteering');

    Route::get('type_help', [TypeHelpController::class, 'index'])->name('api.type_help');

    Route::get('urgent_help', [UrgentHelpController::class, 'index'])->name('api.urgent_help');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});
