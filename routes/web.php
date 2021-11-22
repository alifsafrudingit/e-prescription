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
})->name('welcome');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('resep-non-racik', [ResepNonRacikController::class, 'create'])->name('resep-non-racik.create');
Route::post('checkout', [ResepNonRacikController::class, 'store'])->name('checkout.store');
Route::get('resep-racik', [ResepRacikController::class, 'create'])->name('resep-racik.create');
Route::post('resep-racik', [ResepRacikController::class, 'store'])->name('resep-racik.store');

Route::get('obat', [ObatController::class, 'obat'])->name('obat');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
