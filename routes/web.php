<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', [ProjectController::class, 'index']);
Route::get('/about', [ProjectController::class, 'about']);

Route::get('/teste', function () {
    return view('teste');
});
