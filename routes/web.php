<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\diamondGameController;
use App\Http\Controllers\jokiMlController;
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
    });
