<nav class="navbar navbar-expand-lg navbar-dark bg-dark-transparent fixed-top">
    
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">Bienvenido</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav"aria-controls="navbarNav" aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item px-4">
                <a class="nav-link" href="#inicio">Inicio</a>
            </li>
            <li class="nav-item px-4 text-nowrap">
                <a class="nav-link" href="#tecnologias">Tecnologías</a>
            </li>
            <li class="nav-item px-4 text-nowrap">
                <a class="nav-link" href="#servicios">Servicios</a>
            </li>
            <li class="nav-item px-4 text-nowrap">
                <a class="nav-link" href="#contacto">Contáctame</a>
            </li>
        </ul>

    </div>
</nav>
@push('scripts')
    <script src="{{ asset('js/resalto-menu.js') }}"></script>
@endpush
