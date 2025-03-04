<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\EmpleadoController;

Route::resource('oficinas', controller: OficinaController::class);

Route::resource('oficinas/{oficina}/empleados', controller: EmpleadoController::class);

Route::get('/', function () {
    return view('welcome');
});


