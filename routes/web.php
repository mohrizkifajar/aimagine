<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;

// Auth Pages
Route::get('/sign-in', [AuthController::class, 'signIn'])->name('auth.sign-in');

// Landing Pages
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/images', [ImageController::class, 'index'])->name('dashboard.images.index');
