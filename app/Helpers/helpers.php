<?php

use Illuminate\Support\Facades\Request;

// Devuelve 'active' si la ruta actual coincide con $path, 
//para resaltar el enlace del menú.
if (!function_exists('set_active')) {
    function set_active($path)
    {
        return Request::is($path) ? 'active' : '';
    }
}
