@extends('layouts.master')

@section('title', 'Home')

@php
  $cards = config('cards.cards', []);
@endphp

@section('content')
  <h1 class="h3 mb-4">WELCOME TO LARAVEL'S FOOD BLOG</h1>


  <x-jumbotron />

  {{-- Card dinamiche da config/cards.php --}}
 @if (!empty($cards))
  <section class="py-4">
    <div class="container">
      <div class="row align-items-center mb-2">
        <div class="col-md-8">
          <h2 class="subtitle h4 mb-0">Scopri le nostre ricette</h2>
        </div>
        <div class="col-md-4 text-md-end pt-3 pt-md-0">
          <a href="{{ route('welcome') }}" class="btn btn-outline-primary btn-sm">
            Torna alla pagina di benvenuto
          </a>
        </div>
      </div>

      <div class="row g-3">
        @foreach ($cards as $card)
          <div class="col-12 col-sm-6 col-lg-4">
            <x-card
              :titolo="$card['titolo']"
              :sottotitolo="$card['sottotitolo']"
              :img="$card['img']"
            >
              <p class="mb-2">{{ $card['testo'] }}</p>

              {{-- Se in futuro aggiungi link nella config, li gestisci così: --}}
              @isset($card['link'])
                @php
                  $href = $card['link']['route'] ?? null
                    ? route($card['link']['route'])
                    : url($card['link']['url'] ?? '#');
                  $label = $card['link']['label'] ?? 'Scopri';
                @endphp
                <a href="{{ $href }}" class="btn btn-primary btn-sm">{{ $label }}</a>
              @endisset
            </x-card>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endif


@endsection
