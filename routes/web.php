<?php

use App\Http\Controllers\Admin\CarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin.dasboard');
Route::get('/admin/cars', [CarController::class, 'index'])->name('admin.cars');

Route::get('/admin/cars/create', [CarController::class, 'create'])->name('admin.cars.create');

Route::get('/', function () {
    return view('welcome');
});
