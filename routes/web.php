<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AprendizadoController; 
use Illuminate\Support\Facades\Route;


// Route::middleware('auth')->group(function () {

Route::get('/', [AprendizadoController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');

// Aq é pro usuário fazer alteração de dados. N vou usar no momento.
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


Route::get('/criar', [AprendizadoController::class, 'create'])->name('criar.form');
Route::post('/criar', [AprendizadoController::class, 'store'])->name('criar.store');
Route::get('/editar/{id}', [AprendizadoController::class, 'edit'])->name('editar.form');
Route::put('/editar/{id}', [AprendizadoController::class, 'update'])->name('editar.update');
Route::delete('/aprendizado/{id}', [AprendizadoController::class, 'destroy'])->name('aprendizado.destroy');

// });
require __DIR__.'/auth.php';
