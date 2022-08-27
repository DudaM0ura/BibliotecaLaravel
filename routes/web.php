<?php

use App\Http\Controllers\BibliotecaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BibliotecaController::class, 'index'])->name('biblioteca.index');
Route::get('/biblioteca/create', [BibliotecaController::class, 'create'])->name('biblioteca.create');
Route::post('/biblioteca/create',[BibliotecaController::class, 'store'])->name('biblioteca.store');
Route::get('/biblioteca/edit/{id}', [BibliotecaController::class, 'edit'])->name('biblioteca.edit');
Route::put('/biblioteca/edit/{id}', [BibliotecaController::class, 'update'])->name('biblioteca.update');
Route::delete('/biblioteca/destroy/{id}', [BibliotecaController:: class, 'destroy'])->name('biblioteca.destroy');