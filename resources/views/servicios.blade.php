@extends('layouts.plantillaBase')
@section('titulo', 'servicios')
@section('body-class', 'inicio-fondo')
@section('contenido')

<div class="container-fluid  contenido-subpaginas">
    
    <div class="container">
        <h2 class="text-center text-border mb-4">Catálogo de Servicios Web</h2>

        <div class="row justify-content-center">
            <x-pack.basico />
            <x-pack.institucional/>
            <x-pack.autoadministrable/>
            <x-pack.ecommerce />
            <x-pack.extras/>
        </div>
        
    </div>
</div>
@endsection
