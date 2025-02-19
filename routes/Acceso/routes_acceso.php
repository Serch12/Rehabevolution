<?php

use App\Http\Controllers\AccesoController;

Route::get('/acceso', [AccesoController::class, 'index'])->name('acceso')->middleware('guest');
Route::get('/acceso/Muestra', [AccesoController::class, 'Muestra'])->name('acceso/Muestra')->middleware('guest');
Route::post('/acceso/Genera', [AccesoController::class, 'Genera'])->name('acceso/Genera')->middleware('guest');

Route::get('/perfil/{token}', [AccesoController::class, 'indexPerfil'])->name('perfil/{token}');
