<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\ResepRacikController;
use App\Http\Controllers\ResepNonRacikController;

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
})->name('landing-page');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/resep-non-racik', function () {
    return view('resepNonRacik');
})->name('resep-non-racik');

Route::get('/resep-racik', function () {
    return view('resepRacik');
})->name('resep-racik');

Route::get('resep-non-racik', [ResepNonRacikController::class, 'create'])->name('resep-non-racik');
Route::get('resep-racik', [ResepRacikController::class, 'create'])->name('resep-racik');

Route::get('obat', [ObatController::class, 'obat'])->name('obat');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
