<?php

use Illuminate\Support\Facades\Route;

Route::get('/teste', function () {
    return response()->json(['mensagem' => 'Está chegando na rota!']);
});
