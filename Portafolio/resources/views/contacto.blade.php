@extends('layouts.plantillaBase')
@section('titulo', 'contacto')
@section('body-class', 'contacto')
@section('contenido')

<div class="contenido-subpaginas d-flex align-items-center justify-content-start text-white" style="min-height: 100vh;">
    <div class="col-md-6 px-4">
        <h3 class="text-border mb-2 display-6">Contáctame</h3>

    @if(session('success'))
        <div id="mensaje-exito" class="alert alert-success alert-dismissible fade show" role="alert" style="position: relative;">
            {{ session('success') }}
            <button type="button" class="btn-close" aria-label="Cerrar" style="position: absolute; top: 0.25rem; right: 0.5rem;" onclick="cerrarMensaje()"></button>
        </div>
    @endif

        <form action="{{ route('contacto.enviar') }}" method="POST" 
        style="background-color: rgba(0, 0, 0, 0.3);" 
        class="p-4 rounded-3">
            @csrf
            <div class="mb-2">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-2">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <div class="mt-3">
            <p>También podés escribirme a: <a href="mailto:cristian.ruiz.diaz@gmail.com" 
                    class="text-white text-decoration-underline">crisian.ruizdiaz.tec@gmail.com</a></p>
            <a href="https://www.linkedin.com/in/cristian-ruiz-diaz-744466338/" 
                class="btn btn-primary" target="_blank">🔗 LinkedIn</a>
            <a href="https://github.com/CristianDiaz7" 
                class="btn btn-light" target="_blank">🐙 GitHub</a>
            <a href="https://wa.me/5403751524739?text=Hola%2C%20vi%20tu%20portfolio%20y%20me%20gustaría%20contactarte" 
                class="btn btn-success" 
            target="_blank">📱 WhatsApp</a>
        </div>
    </div>
</div>

{{-- Script para ocultar mensaje después de 4 segundos --}}
<script>
    function cerrarMensaje() {
        const mensaje = document.getElementById('mensaje-exito');
        if (mensaje) {
            mensaje.style.transition = 'opacity 0.5s ease';
            mensaje.style.opacity = 0;
            setTimeout(() => mensaje.remove(), 500);
        }
    }

    setTimeout(() => {
        cerrarMensaje();
    }, 4000); // Desaparece solo después de 4 segundos
</script>
@endsection
