<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function(){
    return view('app');
});

Route::get('/sobre_mi', function(){
    return view('sobreMi');
});

Route::get('/servicios', function(){
    return view('/servicios');
});

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/tecnologias', function () {
    return view('tecnologias');
})->name('tecnologias');


Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');


