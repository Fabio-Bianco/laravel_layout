@extends('layouts.master')

@section('title')
    Contatti
@endsection

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-card :titolo="'Contattaci'" :sottotitolo="'Questi sono i nostri contatti'">
                    <p class="card-text">
                        Siamo sempre felici di sentirti!<br>
                        <br>
                        <strong>Email:</strong> info@laravelteam.it<br>
                        <strong>Telefono:</strong> +39 0123 456789<br>
                        <strong>Indirizzo:</strong> Via Fittizia 123, 00100 Roma (RM)<br>
                        <br>
                        Oppure compila il nostro <a href="#">form di contatto</a> per ricevere una risposta rapida dal nostro staff.<br>
                        <br>
                        Seguici anche sui nostri social:<br>
                        <ul>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">LinkedIn</a></li>
                        </ul>
                    </p>
                    <a href="{{ route('homepage') }}" class="btn btn-outline-secondary mt-3">
                        Torna alla Home page
                    </a>
                </x-card>
            </div>
        </div>
    </div>
@endsection