<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthCustomerController;
use App\Http\Controllers\Api\DiamondGameController;
use App\Http\Controllers\Api\UploadFotoController;
use App\Http\Controllers\Api\JokiRankController;
use App\Http\Controllers\Api\PemesananJokiController;
use App\Http\Controllers\ApiTransaksiIpaymu;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\Api\PemesananDiamondController;
use App\Http\Controllers\Api\ForgotPasswordController;




Route::post('/register', [AuthCustomerController::class, 'register']);
Route::post('/login', [AuthCustomerController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthCustomerController::class, 'getUser']);
    Route::get('/me', [AuthCustomerController::class, 'me']);
    Route::post('/logout', [AuthCustomerController::class, 'logout']);


});

Route::post('/users/{id}/photo', [UploadFotoController::class, 'updatePhoto']);
Route::get('/users/{id}/getphoto', [UploadFotoController::class, 'getPhoto']);


Route::get('/data', [AuthCustomerController::class, 'getData']);
Route::get('/pemesanan',[UserApiController::class, 'getPemesanan']);
Route::get('/pemesanan/{id}',[UserApiController::class, 'getPemesananByid']);//by_id
Route::post('/postPemesanan',[UserApiController::class, 'postPemesanan']);

// // Diamond Game //
Route::get('/diamonds/{gameName}', [DiamondGameController::class, 'GetdataDiamond']);

// Route::get('/diamonds/pubg', [DiamondGameController::class, 'diamondPUBG']);
// Route::get('/diamonds/ml', [DiamondGameController::class, 'diamondMobileLegend']);


// JokiRankShow
Route::get('/jokirank', [JokiRankController::class, 'index']);
// Route::get('/pemesanan/{orderId}', 'PemesananJokiController@searchById');
Route::get('/pemesanan/{orderId}', [PemesananJokiController::class, 'searchById']);
Route::post('/transactions', [ApiTransaksiIpaymu::class, 'store']);
Route::post('pemesanan-diamond', [PemesananDiamondController::class, 'pemesanan']);
Route::get('order-ids/{id_user}', [PemesananDiamondController::class, 'getOrdersByUser']);



//////  sent OTP lupa password  ///////
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendOTP']);
Route::post('/verify-otp', [ForgotPasswordController::class, 'verifyOTP']);
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword']);




