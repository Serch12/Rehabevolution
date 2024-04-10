<?php

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
    return view('Home.principal');
});

//requiere de rutas de Encuesta
require(__DIR__ . '/Encuesta/routes_encuesta.php');

/* Rutas de Nosotros */
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('aviso', [App\Http\Controllers\HomeController::class, 'aviso'])->name('aviso');

/* Rutas de Nosotros */
Route::get('nosotros', [App\Http\Controllers\NosotrosController::class, 'index'])->name('nosotros');

/* Rutas de Servicios */
Route::get('servicios', [App\Http\Controllers\ServiciosController::class, 'index'])->name('servicios');

/* Rutas de Convenios */
Route::get('convenios', [App\Http\Controllers\ConveniosController::class, 'index'])->name('convenios');

/* Rutas de Convenios */
Route::get('contacto', [App\Http\Controllers\ContactoController::class, 'index'])->name('contacto');