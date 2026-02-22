<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoriaController;


Route::get('/', [ProjectController::class, 'index']);
Route::get('/about', [ProjectController::class, 'about']);
Route::get('/categorias', [CategoriaController::class, 'index']);

Route::get('/teste', function () {
    return view('teste');
});
