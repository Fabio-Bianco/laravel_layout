@extends('layouts.master')

@section('title', 'Homepage')

@section('content')
  <div class="container py-4">
    <h1 class="h3 mb-4">Fumetti</h1>

    <div class="row g-3">
      @forelse ($comics as $index => $comic)
        @php
          $id = 'details-'.$index; // id univoco per il collapse
        @endphp

        <div class="col-12 col-sm-6 col-lg-4">
          <article class="card h-100 shadow-sm">
            <div class="card-body d-flex flex-column">
              {{-- Titolo sempre visibile --}}
              <h3 class="h6 mb-3">{{ $comic['title'] ?? 'Senza titolo' }}</h3>

              {{-- Contenuto collassabile: dentro la stessa card --}}
              <div id="{{ $id }}" class="collapse">
                @if (!empty($comic['thumb']))
                  <img
                    src="{{ $comic['thumb'] }}"
                    alt="{{ $comic['title'] ?? 'Cover' }}"
                    class="img-fluid rounded mb-3"
                    loading="lazy">
                @endif

                @if (!empty($comic['description']))
                  <p class="mb-2">{{ $comic['description'] }}</p>
                @endif

                <ul class="list-unstyled small mb-0">
                  @if (!empty($comic['price']))
                    <li><strong>Price:</strong> {{ $comic['price'] }}</li>
                  @endif
                  @if (!empty($comic['series']))
                    <li><strong>Series:</strong> {{ $comic['series'] }}</li>
                  @endif
                  @if (!empty($comic['type']))
                    <li><strong>Type:</strong> {{ $comic['type'] }}</li>
                  @endif
                  @if (!empty($comic['sale_date']))
                    <li><strong>Sale date:</strong> {{ $comic['sale_date'] }}</li>
                  @endif
                </ul>
              </div>

              {{-- Spacer per spingere il footer in basso nella card --}}
              <div class="flex-grow-1"></div>
            </div>

            {{-- Footer con il bottone in fondo alla card --}}
            <div class="card-footer bg-white border-0 pt-0">
              <div class="d-grid">
                <button
                  class="btn btn-outline-primary btn-sm toggle-details"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#{{ $id }}"
                  aria-expanded="false"
                  aria-controls="{{ $id }}"
                  data-text-open="Nascondi dettagli"
                  data-text-closed="Dettagli">
                  Dettagli
                </button>
              </div>
            </div>
          </article>
        </div>
      @empty
        <div class="col-12">
          <p class="text-muted">Nessun fumetto disponibile.</p>
        </div>
      @endforelse
    </div>
  </div>
@endsection
