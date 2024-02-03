<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\diamondGameController;
use App\Http\Controllers\jokiMlController;
use App\Http\Controllers\pemesananDiamond;
use App\Http\Controllers\pemesananDiamondController;
use App\Http\Controllers\pemesananJokiController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('adminDev')->group(
    function () {
        Route::get('/', function() {
            return view('adminDev.layout');
        });
        Route::get('/', [dashboardController::class, 'index'])->name('dashboard.index');
        Route::resource('diamondGame', diamondGameController::class);
        Route::resource('jokiML', jokiMlController::class);
        Route::resource('pemesanan/diamond', pemesananDiamondController::class);
        Route::resource('pemesanan/joki', pemesananJokiController::class);
        Route::resource('worker', workerController::class);
    });
