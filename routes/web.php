<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

// Auth Pages
Route::get('/sign-in', [AuthController::class, 'signIn'])->name('auth.sign-in');

// Landing Pages
Route::get('/', [HomeController::class, 'index'])->name('home.index');
