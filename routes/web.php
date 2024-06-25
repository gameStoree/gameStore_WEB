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
use App\Http\Controllers\loginControllerReal;
use App\Http\Controllers\profileCustomerController;
use Illuminate\Routing\Route as RoutingRoute;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

Route::get('/apiML', [ApiMlController::class, 'tampilan'])->name('apiMl.tampilan');

Route::get('/', function () {
    return redirect()->route('customer.beranda');
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
        Route::put('takeJob/report/{id}', [takeJobController::class, 'report'])->name('takeJob.report');
        Route::put('takeJob/jokiDone/{id}', [takeJobController::class, 'jokiDone'])->name('takeJob.jokiDone');
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
        Route::get('/invoice', [cekInvoiceCustomerController::class, 'index'])->name('invoice');
        // Route::get('/invoice', [cekInvoiceCustomerController::class, 'show'])->name('invoice.show');
        Route::get('/profileCustomer', [profileCustomerController::class, 'index'])->name('profileCustomer.index');
        Route::get('/pesan-diamond/{game_id}', [pesanDiamondCustomerController::class, 'show'])->name('pesanDiamond.show');
        Route::post('/pesan-diamond/addPemesanan', [pesanDiamondCustomerController::class, 'addPemesananDiamond'])->name('pesanDiamondCustomer.addPemesanan');
        Route::get('/pesanDiamondInvoice/{id}', [diamondInvoiceController::class, 'index'])->name('pesanDiamondInvoice.index');
        Route::get('/jokiRankInvoice/{id}', [jokiRankInvoiceController::class, 'index'])->name('pesanJokiInvoice.index');
        Route::post('/jokiRank/addPemesanan', [jokiRankCustomerController::class, 'addPemesananJoki'])->name('jokiRankCustomer.addPemesanan');
        Route::get('/loginAll', [loginControllerReal::class, 'index'])->name('loginAll.index');
    }
);
Route::get('/', [dashboardCustomerController::class, 'index'])->name('dashboardCustomer.index');
