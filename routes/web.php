<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);

Route::get('/register', [LoginController::class, 'register'])->middleware('guest');
Route::post('/register', [LoginController::class, 'tambah']);

Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/detail/{id}', [DashboardController::class, 'detail'])->middleware('auth'); //read

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');

Route::get('/about', [DashboardController::class, 'about']);

Route::get('/create', [PostController::class, 'create']);
Route::post('/create', [PostController::class, 'store'])->middleware('auth'); //
Route::delete('/delete/{id}', [PostController::class, 'delete']);//delete
Route::get('/edit/{id}', [PostController::class, 'edit'])->middleware('auth');
Route::post('/edit/{id}', [PostController::class, 'update'])->middleware('auth');

