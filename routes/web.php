<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MotoController;
<<<<<<< HEAD
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('home');
=======

Route::get('/', function () {
    return view('welcome');
});
>>>>>>> c58c9ff3eaf53189fa56924c4fc102fde39f6288
Route::resource('products', ProductController::class);
Route::resource('motos', MotoController::class);




<<<<<<< HEAD


Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
=======
>>>>>>> c58c9ff3eaf53189fa56924c4fc102fde39f6288
