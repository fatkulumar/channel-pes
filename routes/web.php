<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\PesantrenController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\VideoController;
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

Route::get('pesantren/', [PesantrenController::class, 'index'])->name('pesantren');
Route::get('pesantren/pesantren', [PesantrenController::class, 'pesantren'])->name('pesantren.pesantren');
Route::POST('pesantren/store', [PesantrenController::class, 'store'])->name('pesantren.store');
Route::get('pesantren/edit', [PesantrenController::class, 'edit'])->name('pesantren.edit');
Route::POST('pesantren/update/', [PesantrenController::class, 'update'])->name('pesantren.update');
Route::post('pesantren/delete/', [PesantrenController::class, 'destroy'])->name('pesantren.delete');

Route::GET('/channel', [ChannelController::class, 'index'])->name('channel');
Route::GET('/dashboard/channel', [ChannelController::class, 'dashboard'])->name('dashboard.channel');
Route::POST('channel/store', [ChannelController::class, 'store'])->name('channel.store');
Route::POST('channel/delete', [ChannelController::class, 'destroy'])->name('channel.delete');
Route::POST('channel/edit', [ChannelController::class, 'edit'])->name('channel.edit');
Route::POST('channel/update', [ChannelController::class, 'update'])->name('channel.update');

Route::GET('/santri', [SantriController::class, 'index'])->name('santri');
Route::GET('/santri/data', [SantriController::class, 'data'])->name('santri.data');
Route::POST('/santri/store', [SantriController::class, 'store'])->name('santri.store');
Route::POST('/santri/delete', [SantriController::class, 'destroy'])->name('santri.delete');
Route::POST('/santri/show', [SantriController::class, 'show'])->name('santri.show');
Route::POST('/santri/update', [SantriController::class, 'update'])->name('santri.update');

Route::GET('/video', [VideoController::class, 'index'])->name('video');
Route::GET('/video/detail/{params}', [VideoController::class, 'detail'])->name('video.detail');

