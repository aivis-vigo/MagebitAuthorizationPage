<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AccountController::class, 'index'])->name('index');
Route::post('/login', [AccountController::class, 'login'])->name('login');
Route::get('/logout', [AccountController::class, 'logout'])->name('logout');
Route::post('/register', [AccountController::class, 'register'])->name('register');
Route::get('/success', [AccountController::class, 'success'])->name('success');
