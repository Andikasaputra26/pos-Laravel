<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PembelianController;

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

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAksi')->name('login.aksi');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});


Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('pos', ProductController::class);

    Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
        Route::get('', 'index')->name('kategori');
        Route::get('tambah', 'tambah')->name('kategori.tambah');
        Route::post('tambah', 'simpan')->name('kategori.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('kategori.edit');
        Route::post('edit/{id}', 'update')->name('kategori.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('kategori.hapus');
    });

    Route::controller(PembelianController::class)->prefix('pembelian')->group(function () {
        Route::get('', 'index')->name('pembelian');
        Route::post('tambah', 'store')->name('pembelian.simpan');
    });

    Route::controller(UserController::class)->prefix('user')->group(function () {
        Route::get('', 'index')->name('user');
        Route::get('tambah', 'tambah')->name('user.tambah');
        Route::post('tambah', 'simpan')->name('user.simpan');
        Route::get('edit/{id}', 'edit')->name('user.edit');
        Route::post('edit/{id}', 'update')->name('user.update');
        Route::get('hapus/{id}', 'hapus')->name('user.hapus');
    });

    Route::controller(CustomerController::class)->prefix('customer')->group(function () {
        Route::get('', 'index')->name('customer');
        Route::get('tambah', 'tambah')->name('customer.tambah');
        Route::post('tambah', 'simpan')->name('customer.simpan');
        Route::get('edit/{id}', 'edit')->name('customer.edit');
        Route::post('edit/{id}', 'update')->name('customer.update');
        Route::get('hapus/{id}', 'hapus')->name('customer.hapus');
    });
});
