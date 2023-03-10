<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\SiswaController;
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

Route::get('/', [SiswaController::class, 'index']);
Route::get('/siswa/{slug}', [SiswaController::class, 'detail']);
Route::get('/siswa/ekstrakulikuler/{slug}', [SiswaController::class, 'ekstrakulikuler']);
Route::get('/siswa/kelas/{slug}', [SiswaController::class, 'kelas']);
Route::get('/siswa/delete/{id}', [SiswaController::class, 'delete']);
Route::delete('/siswa/destroy/{id}', [SiswaController::class, 'destroy']);

Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru/{slug}', [GuruController::class, 'detail']);
Route::get('/guru/delete/{id}', [GuruController::class, 'delete']);

Route::get('/ekstrakulikuler', [EkstrakulikulerController::class, 'index']);
Route::get('/matapelajaran', [MataPelajaranController::class, 'index']);
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/tentang', [TentangController::class, 'index']);
