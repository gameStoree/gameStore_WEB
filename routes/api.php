<?php
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiTransaksiIpaymu;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\Api\JokiRankController;
use App\Http\Controllers\Api\UploadFotoController;
use App\Http\Controllers\diamondInvoiceController;
use App\Http\Controllers\Api\DiamondGameController;
use App\Http\Controllers\jokiRankInvoiceController;
use App\Http\Controllers\Api\AuthCustomerController;
use App\Http\Controllers\Api\PemesananJokiController;
use App\Http\Controllers\Api\ForgotPasswordController;
use App\Http\Controllers\Api\PemesananDiamondController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\takeJobController;





Route::post('/register', [AuthCustomerController::class, 'register']);
Route::post('/login', [AuthCustomerController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthCustomerController::class, 'getUser']);
    Route::get('/me', [AuthCustomerController::class, 'me']);
    Route::post('/logout', [AuthCustomerController::class, 'logout']);


});
Route::post('/upload-photo/{id}', [UploadFotoController::class, 'uploadPhoto']);
Route::get('/get-user-photo/{id}', [UploadFotoController::class, 'getUserPhoto']);


Route::get('/data', [AuthCustomerController::class, 'getData']);
Route::get('/pemesanan',[UserApiController::class, 'getPemesanan']);
Route::get('/pemesanan/{id}',[UserApiController::class, 'getPemesananByid']);
Route::post('/postPemesanan',[UserApiController::class, 'postPemesanan']);

// // Diamond Game //
Route::get('/diamonds/{gameName}', [DiamondGameController::class, 'GetdataDiamond']);

// Route::get('/diamonds/pubg', [DiamondGameController::class, 'diamondPUBG']);
// Route::get('/diamonds/ml', [DiamondGameController::class, 'diamondMobileLegend']);


// JokiRankShow
Route::get('/jokirank', [JokiRankController::class, 'index']);
// Route::get('/pemesanan/{orderId}', 'PemesananJokiController@searchById');
// Route::get('/pemesanan/{orderId}', [PemesananJokiController::class, 'searchById']);

Route::get('/pemesananjoki/{id}', [PemesananJokiController::class, 'getPemesanan']);
Route::get('/search/{id}', [PemesananJokiController::class, 'searchPemesanan']);



Route::get('pemesanan/{id}/images', [PemesananJokiController::class, 'getImageById']);
Route::post('/joki-done/{id}', [takeJobController::class , 'jokiDone']);
Route::get('/joki-done/images/{id}', [takeJobController::class, 'getImages']);
// Route::get('/test-image/{id}', [takeJobController::class, 'jokiDone']);


Route::post('/transactions', [ApiTransaksiIpaymu::class, 'store']);
Route::post('pemesanan-diamond', [PemesananDiamondController::class, 'pemesanan']);
Route::get('/pemesanan-dm-terbaru/{id_user}', [pemesananDiamondController::class, 'getPemesananDiamondTerbaru']);
Route::get('/pemesanan-jk-terbaru/{id_user}', [ApiTransaksiIpaymu::class, 'getPemesananjokiTerbaru']);
Route::get('/order-ids/{id_user}', [PemesananDiamondController::class, 'getCombinedOrdersByUser']);



//////  sent OTP lupa password  ///////
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendOTP']);
Route::post('/verify-otp', [ForgotPasswordController::class, 'verifyOTP']);
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword']);


Route::post('/jokiRankInvoice/updateStatus', [jokiRankInvoiceController::class, 'updateStatus']);
Route::post('/pesanDiamondInvoice/updateStatus', [diamondInvoiceController::class, 'updateStatus']);

