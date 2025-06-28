@props([
    'id', 
    'icon', 
    'title', 
    'description', 
    'details', 
    'color' => 'primary'
    ])

<div class="col-md-4 mb-4">
    <div class="card h-100 shadow border-{{$color}}">
        <div class="card-body d-flex flex-column">
        <!--................................ -->
            <h5 class="card-title text-{{$color}}">
                {{$icon}}{!!($title)!!}
            </h5>

            <p>{{$description}}</p>

            <!-- Botón que abre el modal -->
            <button type="button"
                    class="btn btn-outline-{{ $color }} mt-3 mt-auto"
                    data-bs-toggle="modal"
                    data-bs-target="#modal-{{ $id }}">
                Más detalles
            </button>
        <!--................................ -->
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" 
    id="modal-{{ $id }}" tabindex="-1" aria-labelledby="modalLabel-{{ $id }}" 
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-{{ $color }}">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel-{{ $id }}">
                    {!! $icon !!} {!! $title !!}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                {!! $details !!}
            </div>
        </div>
    </div>
</div>
