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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biblioteca/index', [BibliotecaController::class, 'index'])->name('biblioteca.index');
Route::get('/biblioteca/create', [BibliotecaController::class, 'create'])->name('biblioteca.create');