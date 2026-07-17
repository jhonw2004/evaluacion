<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;

Route::redirect('/', '/vehiculos');

Route::resource('vehiculos', VehiculoController::class);
