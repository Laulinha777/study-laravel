<?php

use App\Http\Controllers\AprendizadoController;
use Illuminate\Support\Facades\Route;

Route::get('/inicio', [AprendizadoController::class, 'index']);

Route::get('/criar', [AprendizadoController::class, 'create'])
    ->name('criar.form');

Route::post('/criar', [AprendizadoController::class, 'store'])
    ->name('criar.store');
    
Route::post('/criar', [AprendizadoController::class, 'store'])
    ->name('criar.store');

Route::get('/teste', function () {
    return view('teste');
});
