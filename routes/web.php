<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('sign-up', [HomeController::class, 'signup'])->name('sign-up');
Route::get('login', [HomeController::class, 'login'])->name('login');
Route::get('home', [HomeController::class, 'index'])->name('home');

// To add user
Route::post('sign-up', [UserController::class, 'store'])->name('sign-up.store');
