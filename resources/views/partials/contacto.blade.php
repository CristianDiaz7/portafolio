<section class="container d-flex align-items-center justify-content-center text-center presentacion" id="contacto">

    <div class="col-md-6 px-4">
        <h3 class="text-border mb-2 display-6">Contáctame</h3>

        @if(session('success'))
            <div id="mensaje-exito" class="alert alert-success alert-dismissible fade show" 
                role="alert" style="position: relative;">
                {{ session('success') }}
                <button type="button" class="btn-close" aria-label="Cerrar" 
                        style="position: absolute; top: 0.25rem; right: 0.5rem;" onclick="cerrarMensaje()">
                </button>
            </div>
        @endif

        <form action="{{ route('contacto.enviar') }}" method="POST"  
        class="p-4 rounded-3 bg-dark bg-opacity-25">
            @csrf
            <div class="mb-2">
                <label for="nombre"  class="form-label fw-bold text-border d-block text-start"">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="mb-2">
                <label for="email"  class="form-label fw-bold text-border d-block text-start"">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-2">
                <label for="mensaje" class="form-label fw-bold text-border d-block text-start">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Enviar
            </button>
        </form>
        <div class="mt-3 text-white text-decoration" >
            <p>También podés escribirme a: 
                <a href="mailto:crisian.ruizdiaz.tec@gmail.com"
                class="text-white text-decoration-underline">
                    crisian.ruizdiaz.tec@gmail.com
                </a>
            </p>
        </div>
    </div>
</section>

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

