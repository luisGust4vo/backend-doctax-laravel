<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;

Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('{id}', [UserController::class, 'show']);
    Route::put('{id}', [UserController::class, 'update']);
    Route::delete('{id}', [UserController::class, 'destroy']);
    Route::any('{any}', function () {
        return response()->json([
            'error' => 'Rota não encontrada dentro do prefixo /user'
        ], Response::HTTP_NOT_FOUND);
    })->where('any', '.*');
});