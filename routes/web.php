<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dashboardWorkerController;
use App\Http\Controllers\diamondGameController;
use App\Http\Controllers\jokiMlController;
use App\Http\Controllers\kategoriGameController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\pemesananDiamondController;
use App\Http\Controllers\pemesananJokiController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\takeJobController;
use App\Http\Controllers\workerController;
use App\Models\pemesananJoki;
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
    return redirect()->route('login');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [loginController::class, 'index'])->name('login');
    Route::post('/login', [loginController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('adminDev');
});

Route::prefix('adminDev')->middleware('UserAkses:admin')->group(
    function () {
        Route::get('/', function () {
            return view('adminDev.layout');
        });
        Route::get('/', [dashboardController::class, 'index'])->name('dashboard.index');
        Route::get('/logout', [loginController::class, 'logout'])->name('logout');
        Route::resource('kategoriGame', kategoriGameController::class);
        Route::resource('diamondGame', diamondGameController::class);
        Route::resource('jokiML', jokiMlController::class);
        Route::get('/pemesanan/diamond', [pemesananDiamondController::class, 'pesananMasuk'])->name('pemesananDiamond.index');
        Route::put('/pemesanan/diamond/{id}/kirim', [pemesananDiamondController::class, 'diamondKonfirmasiKirim'])->name('pemesanan.diamond.kirim');
        Route::get('/pemesanan/joki', [pemesananJokiController::class, 'pesananJokiMasuk'])->name('pemesananJoki.index');
        Route::resource('worker', workerController::class);
        Route::resource('laporan', laporanController::class);
        Route::get('/profile', [profileController::class, 'index'])->name('profile.index');
        Route::put('/profile/{id}', [profileController::class, 'update'])->name('profile.update');
        Route::get('/home', function () {
            return redirect('/login');
        });
    }
);

Route::prefix('worker')->middleware('UserAkses:worker')->group(
    function () {
        Route::get('/', function () {
            return view('worker.layout');
        });
        Route::get('/logout', [loginController::class, 'logout'])->name('logout');
        Route::get('/', [dashboardWorkerController::class, 'index'])->name('dashboardWorker.index');
        Route::resource('takeJob', takeJobController::class);
    }
);
