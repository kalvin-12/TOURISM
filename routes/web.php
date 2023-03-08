<?php

use App\Http\Controllers\DestinasiPageController;
use App\Http\Controllers\BerandaPageController;
use App\Http\Controllers\KulinerPageController;
use App\Http\Controllers\MuseumPendidikanController;
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
    return view('beranda');
});

// Page

Route::get('destinasi', [DestinasiPageController::class, 'destinasi'])->name('destinasi');
Route::get('beranda', [BerandaPageController::class, 'beranda'])->name('beranda');
Route::get('kuliner', [KulinerPageController::class, 'kuliner'])->name('kuliner');

// content beranda
Route::get('museumpendidikan', [MuseumPendidikanController::class, 'museumpendidikan'])->name('museumpendidikan');