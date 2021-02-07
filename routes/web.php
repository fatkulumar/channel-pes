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
    return view('welcome');
});

Route::get('admin/', [AdminController::class, 'index'])->name('admin');
Route::POST('admin/store', [AdminController::class, 'store'])->name('admin.store');
Route::get('admin/ambilData', [AdminController::class, 'ambilData']);
Route::patch('admin/update', [AdminController::class, 'update'])->name('admin.update');
Route::get('admin/delete/{id_pesantren}', [AdminController::class, 'destroy'])->name('admin.delete');

Route::POST('admin/tambah-channel', [AdminController::class, 'tambahChannel'])->name('admin.tambah.channel');
Route::GET('admin/ambil/data/channel', [AdminController::class, 'ambilDataChannel'])->name('admin.ambil.data.channel');
Route::PATCH('admin/update/data/channel', [AdminController::class, 'updateDataChannel'])->name('admin.update.data.channel');
Route::GET('admin/channel', [AdminController::class, 'channel'])->name('admin.channel');
Route::POST('admin/select2', [AdminController::class, 'select2'])->name('admin.select2');
