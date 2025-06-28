@extends('layouts.plantillaBase')
@section('titulo', 'Ruiz Diaz')
@section('body-class', 'inicio-fondo')
@section('contenido')

<div class="container text-center presentacion mt-5">

    <!-- Foto de perfil -->
    <div class="image-crossfade">
        <img id="img1" class="crossfade-img foto-perfil visible" src="{{ asset('images/foto-de-perfil.jpg') }}" alt="Cristian">
        <img id="img2" class="crossfade-img foto-perfil" src="{{ asset('images/logo.jpeg') }}" alt="Logo Terotero">
    </div>


    <!-- Nombre -->
    <h1 class="fw-bold text-border">
        Cristian Ruiz Diaz
    </h1>

    <div class="d-flex flex-column align-items-center">

        <!-- Rol profesional -->
        <div class="p-3 mb-2 bg-info text-black rounded w-auto mx-auto ">
            <h4 class="mb-0">
                Tec sup. en análisis de sistemas y programación
            </h4>
        </div>

        <!-- Descripción corta -->
        <div class="p-3 mb-2 bg-info text-black rounded w-auto mx-auto">
            <p class="mb-0">
                Desarrollo web full stack con Laravel.
            </p>
        </div>
        
    </div>  

    <!-- Botones -->
    <div class="mt-2 d-flex justify-content-center gap-3 flex-wrap">
        
         <!-- CV y carta presentacion 
        <a href="{{ asset('cv/Curricula programador 2025.pdf') }}" 
        class="btn btn-light" target="_blank">📄 Ver CV</a>
        <a href="{{ asset('cv/Carta de presentacion.pdf') }}" 
        class="btn btn-light" target="_blank">📄 Ver CP</a>
        -->
        <a href="https://www.linkedin.com/in/cristian-ruiz-diaz-744466338/" 
        class="btn btn-primary" target="_blank">🔗 LinkedIn</a>
        <a href="https://github.com/CristianDiaz7" 
        class="btn btn-light" target="_blank">🐙 GitHub</a>
        <a href="https://wa.me/5403751524739?text=Hola%2C%20vi%20tu%20portfolio%20y%20me%20gustaría%20contactarte" 
            class="btn btn-success" 
            target="_blank">📱 WhatsApp</a>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/foto-logo.js') }}"></script>
@endpush
