@extends('layouts.plantillaBase')
@section('titulo', 'Servicios')
@section('body-class', 'inicio-fondo')
@section('contenido')

<div class="container-fluid  contenido-subpaginas">
    <div class="container">
        <h2 class="text-center mb-4">Catálogo de Servicios Web – 2025</h2>
        <p class="text-center text-muted mb-3">
            Soluciones web profesionales, modernas y adaptadas a tus necesidades.
            Ideal para emprendedores, negocios locales, marcas personales y PyMEs.
        </p>
        <div class="row justify-content-center">
            <!-- Incluir componente de Pack Básico -->
            <x-pack-basico/>
            <x-pack-institucional/>
            <x-pack-autoadministrable/>
            <x-pack-e-commerce/>
            <x-extras/>

        </div>
    </div>
</div>
@endsection
