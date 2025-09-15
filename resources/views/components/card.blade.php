@props([
  'titolo' => null,
  'sottotitolo' => null,
  'img' => null,
])

<div {{ $attributes->merge(['class' => 'card h-100 shadow-sm']) }}>
    @if($img)
      <img class="card-img-top" src="{{ asset($img) }}" alt="{{ $titolo ?? 'Card image' }}">
    @endif

    <div class="card-body">
        @isset($titolo)
          <h5 class="card-title mb-1">{{ $titolo }}</h5>
        @endisset

        @isset($sottotitolo)
          <h6 class="card-subtitle text-secondary mb-3">{{ $sottotitolo }}</h6>
        @endisset

        <div class="card-text">
          {{ $slot }}
        </div>
    </div>
</div>
