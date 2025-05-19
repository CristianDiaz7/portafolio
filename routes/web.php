<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('inicio');
});

Route::get('/sobre_mi', function(){
    return view('sobreMi');
});

Route::get('/servicios', function(){
    return view('/servicios');
});