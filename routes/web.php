<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::resource('products', ProductController::class);
Route::resource('motos', MotoController::class);






Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');