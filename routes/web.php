<?php

use App\Http\Controllers\AdminalbumController;
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

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Users
// Beranda
Route::get('/', [UserController::class, 'index']);

// Album
Route::get('/album', [AlbumController::class,'index']);

// Anggota
Route::get('/guru', [AnggotaController::class,'index']);

// Kelas
Route::get('/kelas', [KelasController::class,'index']);

// Kontak
Route::get('/kontak', [KontakController::class,'index'])->name('kontaks.index');
Route::post('/kontak', [KontakController::class,'store'])->name('kontaks.store');

// Tentang
Route::get('/tentang', [TentangController::class,'index']);

// Admin
// Album
Route::get('/admin/album', [AdminalbumController::class,'index'])->name('admin.index');
Route::get('/admin/album/tambah', [AdminalbumController::class,'tambah_album'])->name('admin.tambah_album');

Route::post('/admin/album', [AdminalbumController::class,'store'])->name('albums.store');

Route::get('/admin/album/{album}/edit',[AdminalbumController::class,'edit'])->name('albums.edit');

Route::put('/admin/album/{album}',[AdminalbumController::class,'update'])->name('albums.update');

Route::delete('/admin/album/{album}', [AdminalbumController::class,'destroy'])
->name('albums.destroy');

// Guru
Route::get('/admin/guru',[AnggotaController::class,'guru'])->name('gurus.guru');
Route::get('/admin/guru/tambah', [AnggotaController::class,'tambah_guru'])->name('gurus.tambah_guru');

Route::post('/admin/guru', [AnggotaController::class,'store'])->name('gurus.store');

Route::get('/admin/guru/{guru}/edit',[AnggotaController::class,'edit'])->name('gurus.edit');

Route::put('/admin/guru/{guru}',[AnggotaController::class,'update'])->name('gurus.update');

Route::delete('/admin/guru/{guru}', [AnggotaController::class,'destroy'])
->name('gurus.destroy');

// Kelas
Route::get('/admin/kelas',[KelasController::class,'kelas'])->name('kelas.kelas');
Route::get('/admin/kelas/tambah', [KelasController::class,'tambah_kelas'])->name('kelas.tambah_kelas');

Route::post('/admin/kelas', [KelasController::class,'store'])->name('kelas.store');

Route::get('/admin/kelas/{kelas}/edit',[KelasController::class,'edit'])->name('kelas.edit');

Route::put('/admin/kelas/{kelas}',[KelasController::class,'update'])->name('kelas.update');

Route::delete('/admin/kelas/{kelas}', [KelasController::class,'destroy'])->name('kelas.destroy');


