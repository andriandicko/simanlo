<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
})->middleware('auth');

Route::middleware('only_guest')->group(function() {
    Route::get('signin', [AuthController::class, 'login'])->name('login');
    Route::post('signin', [AuthController::class, 'authenticating']);
    Route::get('signup', [AuthController::class, 'register']);
    Route::post('signup', [AuthController::class, 'registerProcess']);
});

Route::middleware('auth')->group(function() {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/pemasoks', PemasokController::class);
    Route::resource('/pelanggans', PelangganController::class)->middleware('only_admin');
    Route::resource('/produks', ProdukController::class);
    Route::resource('/pesanans', PesananController::class);
    Route::resource('/gudangs', GudangController::class);
});


