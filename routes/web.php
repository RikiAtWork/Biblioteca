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

Route::get('/insertar_libro', function(){
    return view('libros.create');
})->name('libros_create');

Route::get('/insertar_autor', function(){
    return view('autores.create');
})->name('autores_create');

Route::resource('libros', LibroController::class);

Route::resource('autores', AutorController::class);

Route::get('/lista_libros', [LibroController::class, 'index'])->name('libros.index');

Route::get('/lista_autores', [AutorController::class, 'index'])->name('autores.index');


