
<section class="container text-center min-vh-100 presentacion mt-5" id="inicio">
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
        <div class="p-3 mb-2 bg-dark bg-gradient  text-border rounded w-auto mx-auto ">
            <h3 class="mb-0">
                Desarrollador web - Analista de sistemas
            </h3>
        </div>

        <!-- Descripción corta -->
        <div class="p-3 mb-2 bg-dark bg-gradient  text-white text-border rounded w-auto mx-auto">
            <h5 class="mb-0">
                Con especialización en laravel
            </h5>
        </div>
        
    </div>  

    <!-- Botones -->
    <div class="mt-2 d-flex justify-content-center gap-3 flex-wrap">
        <a href="https://www.linkedin.com/in/cristian-ruiz-diaz-744466338/" 
        class="btn btn-primary d-flex align-items-center gap-2" 
        target="_blank">
            <i class="bi bi-linkedin"></i> LinkedIn
        </a>
        
        <a href="https://github.com/CristianDiaz7" 
        class="btn btn-light d-flex align-items-center gap-2" 
        target="_blank">
            <i class="bi bi-github"></i> GitHub
        </a>
        
        <a href="https://wa.me/5403751524739?text=Hola%2C%20vi%20tu%20portfolio%20y%20me%20gustaría%20contactarte" 
        class="btn btn-success d-flex align-items-center gap-2" 
        target="_blank">
            <i class="bi bi-whatsapp"></i> WhatsApp
        </a>
    </div>

</section>


@push('scripts')
    <script src="{{ asset('js/foto-logo.js') }}"></script>
@endpush
