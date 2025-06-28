@props([
    'id',
    'icon',
    'title',
    'description',
    'details',
    'color' => 'danger' // por defecto rojo
])

<div class="col-md-4 mb-4">
    <div class="card h-100 bg-dark bg-opacity-75 border border-{{ $color }} text-light shadow rounded-4">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title text-{{ $color }} d-flex align-items-center gap-2">
                {!! $icon !!} {!! $title !!}
            </h5>

            <p class="card-text text-light small">{{ $description }}</p>

            <button type="button"
                    class="btn btn-outline-{{ $color }} mt-auto"
                    data-bs-toggle="modal"
                    data-bs-target="#modal-{{ $id }}">
                Más detalles
            </button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade"
     id="modal-{{ $id }}" tabindex="-1" aria-labelledby="modalLabel-{{ $id }}"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-light border border-{{ $color }}">
            <div class="modal-header border-bottom border-{{ $color }}">
                <h5 class="modal-title d-flex align-items-center gap-2" id="modalLabel-{{ $id }}">
                    {!! $icon !!} {!! $title !!}
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                {!! $details !!}
            </div>
        </div>
    </div>
</div>

