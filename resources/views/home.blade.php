@extends('layouts.master')

@section('title', 'Home')

@php
  $cards = config('cards.cards', []);
@endphp

@section('content')
  <h1 class="h3 mb-4">WELCOME TO LARAVEL</h1>


  <x-jumbotron />

  {{-- Card dinamiche da config/cards.php --}}
  @if (count($cards))
    <h2 class="h4  ">Le ricette</h2>
      <div class="container py-4">
    <div class="row ">
        <div class="col-md-8">
            <a href="{{ route('welcome') }}" class="btn btn-outline-primary mt-3">
                Torna alla pagina di benvenuto
            </a>
        </div>
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
            <p class="mb-0">{{ $card['testo'] }}</p>
          </x-card>
        </div>
      @endforeach
    </div>
  @endif


@endsection
