<?php

use App\Http\Controllers\RegisterController;
use \App\Http\Controllers\LoginController;
use App\Http\Controllers\ShelterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'welcome')->name('home.index');



//Route::get('/register', [RegisterController::class, 'index'])->name("register.index");
//Route::post('/register', [RegisterController::class, 'store'])->name("register.store");
//
//Route::get('/login', [LoginController::class, 'index'])->name("login.index");
//Route::post('/login', [LoginController::class, 'store'])->name("login.store");

//Route::get('/shelters', [ShelterController::class, 'index'])->name("shelters.index");
