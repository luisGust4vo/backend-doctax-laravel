<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [UserController::class, 'index']);
// Route::post('/', [UserController::class, 'store']);
// Route::get('{id}', [UserController::class, 'show']);
// Route::put('{id}', [UserController::class, 'update']);
// Route::delete('{id}', [UserController::class, 'destroy']);

// Route::prefix('users')->group(function () {
//     Route::get('/', [UserController::class, 'index']);
//     Route::post('/', [UserController::class, 'store']);
//     Route::get('{id}', [UserController::class, 'show']);
//     Route::put('{id}', [UserController::class, 'update']);
//     Route::delete('{id}', [UserController::class, 'destroy']);
// });

Route::get('/', function () {
    return 'User info 1';
});