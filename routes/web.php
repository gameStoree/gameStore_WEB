<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\diamondGameController;
use App\Http\Controllers\jokiMlController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\pemesananDiamondController;
use App\Http\Controllers\pemesananJokiController;
use App\Http\Controllers\profileAdminController;
use App\Http\Controllers\workerController;
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

Route::get('/login', function () {
    return view('login.index');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [loginController::class, 'index'])->name('login');
    Route::post('/login', [loginController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('adminDev');
});

Route::prefix('adminDev')->middleware('auth')->group(
    function () {
        Route::get('/', function () {
            return view('adminDev.layout');
        });
        Route::get('/', [dashboardController::class, 'index'])->name('dashboard.index');
        Route::get('/logout', [loginController::class, 'logout'])->name('logout');
        Route::resource('diamondGame', diamondGameController::class);
        Route::resource('jokiML', jokiMlController::class);
        Route::resource('pemesanan/diamond', pemesananDiamondController::class);
        Route::resource('pemesanan/joki', pemesananJokiController::class);
        Route::resource('worker', workerController::class);
        Route::resource('laporan', laporanController::class);
        Route::resource('profileAdmin', profileAdminController::class);
        Route::get('/home', function () {
            return redirect('/login');
        });
    }
);
