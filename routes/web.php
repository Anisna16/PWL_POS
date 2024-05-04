<?php

use App\Http\Controllers\KategoriContorller;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelContorller;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserContorller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Database\Seeders\LevelSeeder;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;


Route::get('/',[WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function (){
Route::get('/', [UserController::class, 'index']);
Route::post('/list', [UserController::class, 'list']);
Route::get('/create', [UserController::class, 'create']);
Route::post('/', [UserController::class, 'store']);
Route::get('/{id}', [UserController::class, 'show']); // Menampilkan detail user
Route::get('/{id}/edit', [UserController::class, 'edit']); // Menampilkan halaman form edit user
Route::put('/{id}', [UserController::class, 'update']); // Menyimpan perubahan data user
Route::delete('/{id}', [UserController::class, 'destroy']);
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::get('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');

// atur juga untuk middleware menggunakan group pada routing
// didalamnya terdapat group untuk mengecek kondisi login
// jika user yang login merupakan admin maka akan diarahkan ke AdminController
// jika user yang login merupakan manager maka akan diarahkan ke UserController

Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['cek_login:1']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:2']], function () {
        Route::resource('manager', ManagerController::class);
    });

});