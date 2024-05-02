<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthCustomerController;
<<<<<<< Updated upstream
use App\Http\Controllers\Api\DiamondGameController;
use App\Http\Controllers\Api\UploadFotoController;
use App\Http\Controllers\Api\JokiRankController;
use App\Http\Controllers\Api\PemesananJokiController;
=======
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\dashboardController;
>>>>>>> Stashed changes


Route::post('/register', [AuthCustomerController::class, 'register']);
Route::post('/login', [AuthCustomerController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthCustomerController::class, 'getUser']);
    Route::get('/me', [AuthCustomerController::class, 'me']);
    Route::post('/logout', [AuthCustomerController::class, 'logout']);
    Route::post('/upload-photo',    [UploadFotoController::class, 'uploadPhoto']);


});

Route::get('/data', [AuthCustomerController::class, 'getData']);

Route::get('/pemesanan',[UserApiController::class, 'getPemesanan']);
Route::get('/pemesanan/{id}',[UserApiController::class, 'getPemesananByid']);//by_id
Route::post('/postPemesanan',[UserApiController::class, 'postPemesanan']);

// Diamond Game //
Route::get('/diamonds/free.fire', [DiamondGameController::class, 'diamondFreeFire']);
Route::get('/diamonds/pubg', [DiamondGameController::class, 'diamondPUBG']);
Route::get('/diamonds/ml', [DiamondGameController::class, 'diamondMobileLegend']);



// JokiRankShow
Route::get('/jokirank', [JokiRankController::class, 'index']);


// Route::get('/pemesanan/{orderId}', 'PemesananJokiController@searchById');
Route::get('/pemesanan/{orderId}', [PemesananJokiController::class, 'searchById']);












// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('getdata',[AuthCustomerController::class,'getData']);


// //api login test
// // Menggunakan class namespace untuk menentukan controller

// Route::post('/register', [AuthCustomerController::class, 'register']);
// // Route::post('login', [AuthCustomerController::class, 'login']);
// Route::post('/login', [AuthCustomerController::class, 'login']);
// Route::middleware('auth:sanctum')->get('/user', [AuthCustomerController::class, 'getUser']);

// Route::group(['middleware' => ['auth:sanctum']], function () {
//     Route::get('auth/me', [AuthCustomerController::class, 'me']);
//     Route::post('auth/logout', [AuthCustomerController::class, 'logout']);
// });

