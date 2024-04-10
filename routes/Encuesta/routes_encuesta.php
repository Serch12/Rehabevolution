<?php

use App\Http\Controllers\EncuestaController;

Route::get('/encuesta', [EncuestaController::class, 'index'])->name('encuesta')->middleware('guest');
Route::post('/encuesta/create', [EncuestaController::class,'create'])->name('encuesta/create')->middleware('guest');