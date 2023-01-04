<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PemesanandetailController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisprodukController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/pemesanandetail',[PemesanandetailController::class, 'index'])->name('pemesanandetail');

Route::get('/produk',[ProdukController::class, 'index'])->name('produk');

Route::get('/jenisproduk',[JenisprodukController::class, 'index'])->name('jenisproduk');

Route::post('/pemesanandetail',[PemesanandetailController::class, 'create'])->name('add.pmsanan');

Route::get('/pemesanandetail/{id}/edit',[PemesanandetailController::class, 'edit']);

Route::post('/pemesanandetail/{id}/update',[PemesanandetailController::class, 'update'])->name('update.pmsanan');

Route::get('/pemesanandetail/delete/{id}',[PemesanandetailController::class, 'delete']);

Route::post('/jenisproduk',[JenisprodukController::class, 'create'])->name('add.jnisprdk');

Route::get('/jenisproduk/{id}/edit',[JenisprodukController::class, 'edit']);

Route::post('/jenisproduk/{id}/update',[JenisprodukController::class, 'update'])->name('update.jnisprdk');

Route::get('/jenisproduk/delete/{id}',[JenisprodukController::class, 'delete']);

Route::post('/produk',[ProdukController::class, 'create'])->name('add.prdk');

Route::get('/produk/{id}/edit',[ProdukController::class, 'edit']);

Route::post('/produk/{id}/update',[ProdukController::class, 'update'])->name('update.prdk');

Route::get('/produk/delete/{id}',[ProdukController::class, 'delete']);