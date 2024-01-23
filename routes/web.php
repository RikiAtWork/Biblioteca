<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\AutorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name("principal");

Route::get('/crea_libros', function(){
    return view('libros.create');
})-> name('libros_create');

Route::get('/crea/libros', [LibroController::class, 'store'])->name('libros.store');

Route::get('/lista_libros', [LibroController::class, 'index'])->name('libros.index');


