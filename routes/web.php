<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [MainController::class, 'index'])->name('dashboard');
    Route::get('/user/dashboard', [MainController::class, 'indexUser']);
    Route::get('/tambah', [MainController::class, 'tambahData']);
    Route::post('/store', [MainController::class, 'store']);
    Route::get('/edit/{id}', [MainController::class, 'edit']);
    Route::get('/edit', [MainController::class, 'tampilEdit']);
    Route::post('/update/{id}', [MainController::class, 'update']);
    Route::post('/delete/{id}', [MainController::class, 'delete']);
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate']);

Route::get('/get-register', [LoginController::class, 'getRegister'])->name('register');
Route::post('/register', [LoginController::class, 'register']);