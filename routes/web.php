<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\{
    DashboardController,
    ManajemenBarangController,
    PeminjamanBarangController,
};


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

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::controller(ManajemenBarangController::class)->group(function(){
        Route::get('/manajemen-barang', 'index');
        Route::post('/manajemen-barang', 'store');
        Route::post('/manajemen-barang', 'update');
    });
    Route::controller(PeminjamanBarangController::class)->group(function(){
        Route::get('/peminjaman-barang','index');
    });
});

require __DIR__.'/auth.php';
