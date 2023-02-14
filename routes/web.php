<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'cekRole:admin']], function(){
    Route::get('/index', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/user-management', [AdminController::class, 'user'])->name('user-management');
    Route::post('/tambahadmin', [AdminController::class, 'tambahadmin'])->name('tambahadmin');
});
