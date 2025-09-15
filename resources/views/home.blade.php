@extends('layouts.master')

@section('title', 'Home')

@section('content')
  <h1 class="h3 mb-2">Welcome to Laravel</h1>
  <p class="text-secondary mb-4">This is a simple layout example. PAGINA 1</p>

  <x-jumbotron />

  <h2 class="h4 mt-4 mb-3">Ecco le mie card</h2>

  <div class="row g-3">
    @for ($i = 0; $i <= 5; $i++)
      <div class="col-12 col-sm-6 col-lg-4">
        <x-card>
          <x-slot:titolo>Titolo {{ $i }}</x-slot:titolo>
          <x-slot:sottotitolo>Sottotitolo {{ $i }}</x-slot:sottotitolo>
          <p class="mb-0">Questa è la card numero {{ $i }}</p>
        </x-card>
      </div>
    @endfor
  </div>

  <div class="container py-4">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <x-card :titolo="'Homepage'" :sottotitolo="'Benvenuto nella Home'">
          <p class="card-text">
            Questa è la homepage del sito.
          </p>
          <a href="{{ route('welcome') }}" class="btn btn-outline-primary mt-3">
            Torna alla pagina di benvenuto
          </a>
        </x-card>
      </div>
    </div>
  </div>
@endsection
