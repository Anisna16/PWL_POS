<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);

Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']);
Route::put('/kategori/{id}/edit', [KategoriController::class, 'update']);
Route::delete('/kategori/{id}/delete', [KategoriController::class, 'delete']);

Route::get('/', [WelcomeController::class,'index']);