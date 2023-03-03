<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PemohonController;

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

Route::get('/', function () {
    return redirect('/login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'cekRole:admin']], function(){
    Route::get('/index', [AdminController::class, 'index'])->name('admin');
    Route::get('/user-management', [AdminController::class, 'user'])->name('user-management');
    Route::post('/tambahadmin', [AdminController::class, 'tambahadmin'])->name('tambahadmin');
    Route::post('/ubahadmin/{id}', [AdminController::class, 'updateadmin']);
    Route::get('/hapus/{id}', [AdminController::class, 'hapus'])->name('hapus');
    Route::get('/riwayat', [AdminController::class, 'riwayat'])->name('riwayat-admin');
});

Route::group(['prefix'=>'pemohon', 'middleware'=>['auth', 'cekRole:pemohon']], function(){
    Route::get('/index', [PemohonController::class, 'index'])->name('pemohon');
    Route::get('/pengajuan', [PemohonController::class, 'pengajuan'])->name('pengajuan');
    Route::get('/riwayat', [PemohonController::class, 'riwayat'])->name('riwayat');
});
