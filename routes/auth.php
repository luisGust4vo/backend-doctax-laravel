<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Route::middleware('auth:api')->group(function () {
//     Route::post('logout', [AuthController::class, 'logout']);
//     Route::get('me', [UserController::class, 'me']);
//     Route::put('me', [UserController::class, 'update']);
// });


// Route::post('register', [AuthController::class, 'register']);
// Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:api');

// Route::put('{id}', [UserController::class, 'update'])->middleware('auth:api');
