<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pengunjung', [App\Http\Controllers\PengunjungController::class, 'index']);
Route::get('/pengunjung/create', [App\Http\Controllers\PengunjungController::class, 'create']);
Route::post('/pengunjung', [App\Http\Controllers\PengunjungController::class, 'store']);
Route::get('/pengunjung/edit/{id}', [App\Http\Controllers\PengunjungController::class, 'edit']);
Route::patch('/pengunjung/{id}', [App\Http\Controllers\PengunjungController::class, 'update']);
Route::delete('/pengunjung/{id}', [App\Http\Controllers\PengunjungController::class, 'destroy']);

Route::get('/kegiatan', [App\Http\Controllers\KegiatanController::class, 'index']);
Route::get('/kegiatan/create', [App\Http\Controllers\KegiatanController::class, 'create']);
Route::post('/kegiatan', [App\Http\Controllers\KegiatanController::class, 'store']);
Route::get('/kegiatan/edit/{id}', [App\Http\Controllers\KegiatanController::class, 'edit']);
Route::patch('/kegiatan/{id}', [App\Http\Controllers\KegiatanController::class, 'update']);
Route::delete('/kegiatan/{id}', [App\Http\Controllers\KegiatanController::class, 'destroy']);

Route::get('/kepe', [App\Http\Controllers\KepeController::class, 'index']);
Route::get('/kepe/create', [App\Http\Controllers\KepeController::class, 'create']);
Route::post('/kepe', [App\Http\Controllers\KepeController::class, 'store']);
Route::get('/kepe/edit/{id}', [App\Http\Controllers\KepeController::class, 'edit']);
Route::patch('/kepe/{id}', [App\Http\Controllers\KepeController::class, 'update']);
Route::delete('/kepe/{id}', [App\Http\Controllers\KepeController::class, 'destroy']);