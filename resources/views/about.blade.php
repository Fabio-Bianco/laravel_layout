{{-- Estende il layout principale --}}
@extends('layouts.master')


    {{-- Sezione titolo della pagina --}}
    @section('title')
        Chi siamo
    @endsection


    {{-- Sezione contenuto principale --}}
    @section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-card :titolo="'Chi siamo'" :sottotitolo="'La nostra storia'">
                    <p class="card-text">
                        Siamo un team di sviluppatori appassionati di Laravel e tecnologie web.<br>
                        La nostra missione è creare soluzioni digitali moderne, accessibili e di qualità.<br>
                        <br>
                        <strong>Il nostro team:</strong>
                        <ul>
                            <li>Mario Rossi – CEO & Founder</li>
                            <li>Giulia Bianchi – Lead Developer</li>
                            <li>Luca Verdi – UX/UI Designer</li>
                        </ul>
                        <br>
                        Fondata nel 2024, la nostra azienda si impegna ogni giorno per offrire il meglio ai nostri clienti.
                    </p>
                </x-card>
            </div>
        </div>
    </div>
    @endsection