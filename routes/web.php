<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\EstadoController;

Route::get('/', function () {
    return view('lobby');
});

Route::resource('pais', PaisController::class);
Route::resource('estado', EstadoController::class);
