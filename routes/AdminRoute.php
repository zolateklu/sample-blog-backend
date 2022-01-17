<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::post('register', [UserController::class, 'register'])->name('register');
Route::post('login', [UserController::class, 'login'])->name('login');
