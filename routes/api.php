<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('users')->group(base_path('routes/api-user.php'));
Route::prefix('product')->group(base_path('routes/api-product.php'));


