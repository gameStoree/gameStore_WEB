<?php

use App\Models\pemesananJoki;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiMlController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\jokiMlController;
use App\Http\Controllers\workerController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\takeJobController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\diamondGameController;
use App\Http\Controllers\kategoriGameController;
use App\Http\Controllers\pemesananJokiController;
use App\Http\Controllers\dashboardWorkerController;
use App\Http\Controllers\jokiRankCustomerController;
use App\Http\Controllers\pemesananDiamondController;
use App\Http\Controllers\dashboardCustomerController;
use App\Http\Controllers\kalkulatorCustomerController;
use App\Http\Controllers\hubungiKamiCustomerController;
use App\Http\Controllers\cekInvoiceCustomerController;
use App\Http\Controllers\diamondInvoiceController;
use App\Http\Controllers\jokiRankInvoiceController;
use App\Http\Controllers\pesanDiamondCustomerController;
use Illuminate\Routing\Route as RoutingRoute;

Route::get('/apiML', [ApiMlController::class, 'tampilan'])->name('apiMl.tampilan');

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [loginController::class, 'index'])->name('login');
    Route::post('/login', [loginController::class, 'login']);
    Route::get('/register', [loginController::class, 'tampilanRegister'])->name('register');
    Route::post('/register', [loginController::class, 'register'])->name('register.post');
});

Route::get('/logout', [loginController::class, 'logout'])->name('logout');

Route::prefix('adminDev')->middleware('UserAkses:admin')->group(
    function () {
        Route::get('/', function () {
            return view('adminDev.layout');
        });
        Route::get('/', [dashboardController::class, 'index'])->name('dashboard.index');
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
        Route::get('/', [dashboardWorkerController::class, 'index'])->name('dashboardWorker.index');
        Route::resource('takeJob', takeJobController::class);
    }
);


Route::prefix('customer')->group(
    function () {
        Route::get('/', function () {
            return view('customer.beranda');
        });
        Route::get('/', [dashboardCustomerController::class, 'index'])->name('dashboardCustomer.index');
        Route::get('/jokiRank', [jokiRankCustomerController::class, 'index'])->name('jokiRankCustomer.index');
        Route::get('/kalkulator', [kalkulatorCustomerController::class, 'index'])->name('kalkulator.index');
        Route::get('/hubungiKami', [hubungiKamiCustomerController::class, 'index'])->name('hubungiKami.index');
        Route::get('/Invoice', [cekInvoiceCustomerController::class, 'index'])->name('cekInvoice.index');
        Route::get('/pesan-diamond/{game_id}', [pesanDiamondCustomerController::class, 'show'])->name('pesanDiamond.show');
        Route::get('/pesanDiamondInvoice', [diamondInvoiceController::class, 'index'])->name('pesanDiamondInvoice.index');
        Route::get('/jokiRankInvoice', [jokiRankInvoiceController::class, 'index'])->name('pesanDiamondInvoice.index');
        Route::post('/jokiRank/addPemesanan', [pemesananJokiController::class, 'addPemesananJoki'])->name('pemesananJoki.addPemesanan');
    }
);
