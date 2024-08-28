<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SantriController;

Route::get('/santri/create', [SantriController::class, 'create'])->name('santri.create');
Route::get('/santri/store', [SantriController::class, 'store'])->name('santri.store');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');    
});
