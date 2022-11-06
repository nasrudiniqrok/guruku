<?php

use App\Http\Controllers\AdminalbumController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\TentangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/admin', [HomeController::class, 'index'])->name('home');

// Users
// Beranda
Route::get('/', [UserController::class, 'index']);

// Album
Route::get('/album', [AlbumController::class,'index']);

// Anggota
Route::get('/guru', [AnggotaController::class,'guru']);

// Kelas
Route::get('/kelas', [KelasController::class,'kelas']);

// Kontak
Route::get('/kontak', [KontakController::class,'index'])->name('kontaks.index');
Route::post('/kontak', [KontakController::class,'store'])->name('kontaks.store');

// Tentang
Route::get('/tentang', [TentangController::class,'tentang']);
Route::get('/tentang/detail/{tentang}', [TentangController::class,'detail'])->name('tentang.detail');

// Admin
Route::prefix('/admin')->group(function () {

    // Tentang
    Route::resource('tentang', TentangController::class)->middleware('auth');

    // Album
    Route::resource('album', AdminalbumController::class)->middleware('auth');

    // Guru
    Route::resource('guru', AnggotaController::class)->middleware('auth');

    // Kelas
    Route::resource('kelas', KelasController::class)->middleware('auth');
});
