<div class="col">
    <div class="card h-100 shadow-sm">
        <div class="card-body">
            <h5 class="card-title">{{ $titulo }}</h5>
            @if(!empty($icono))
                <i class="{{ $icono }}"></i>
            @endif
            <p class="card-text">{{ $descripcion }}</p>
        </div>
    </div>
</div>
