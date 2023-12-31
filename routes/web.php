<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlasifikasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\JasaController;
use App\Http\Controllers\SppdController;
use App\Http\Controllers\PhController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', HomeController::class, '__invoke')->name('index');
Route::resource('kegiatan', KegiatanController::class);

Route::resource('klasifikasi', KlasifikasiController::class);
Route::resource('modal', ModalController::class);
Route::resource('jasa', JasaController::class);
Route::resource('sppd', SppdController::class);
Route::resource('ph', PhController::class);