<div class="card custom-card h-100">
    <div class="card-body">
        <img src="{{ asset('img/tiramisu.jpg') }}" alt="immagine card" class="card-img-top">

        <h3 class="h5 mb-1">{{ $titolo ?? '' }}</h3>
        @if(!empty($sottotitolo))
            <h4 class="h6 text-muted mb-3">{{ $sottotitolo }}</h4>
        @endif

        <div class="card-text">
            {{ $slot }}
        </div>
    </div>
</div>
