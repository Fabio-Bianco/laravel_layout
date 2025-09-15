@extends('layouts.master')

@section('title')
    Benvenuto
@endsection

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 60vh;">
        <div class="text-center">
            <h1 class="title">
                WELCOME TO LARAVEL'S FOOD BLOG
            </h1>
            <div class="mt-4">
                <a href="{{ route('homepage') }}" class="btn btn-primary mx-2">Home</a>
                <a href="{{ route('about') }}" class="btn btn-primary mx-2">Chi siamo</a>
                <a href="{{ route('contact') }}" class="btn btn-primary mx-2">Contatti</a>
            </div>
        </div>
    </div>

    </a>
    </div>
    </div>
    </div>
@endsection