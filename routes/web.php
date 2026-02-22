<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoriaController;


Route::get('/', [ProjectController::class, 'index']);
Route::get('/inicio', [ProjectController::class, 'inicio']);
Route::get('/layout', [CategoriaController::class, 'main']);

Route::get('/teste', function () {
    return view('teste');
});
