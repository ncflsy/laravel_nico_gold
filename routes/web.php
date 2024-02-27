<?php

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

Route::get('/', [MainController::class, 'index'])->name('dashboard');
Route::get('/tambah', [MainController::class, 'tambahData']);
Route::post('/store', [MainController::class, 'store']);
Route::get('/edit/${id}', [MainController::class, 'edit']);
Route::get('/edit', [MainController::class, 'tampilEdit']);