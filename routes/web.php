<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\EjemploController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return 'Hola aprendices SENA';
});

Route::get('/mensaje', [EjemploController::class, 'mensaje']);

Route::resource('/cursos', CursoController::class);

