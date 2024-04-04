<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthCustomerController;



Route::post('/register', [AuthCustomerController::class, 'register']);
Route::post('/login', [AuthCustomerController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', [AuthCustomerController::class, 'getUser']);
Route::middleware('auth:sanctum')->get('/me', [AuthCustomerController::class, 'me']);
Route::middleware('auth:sanctum')->post('/logout', [AuthCustomerController::class, 'logout']);
Route::get('/data', [AuthCustomerController::class, 'getData']);


















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

