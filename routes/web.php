<?php

use Illuminate\Support\Facades\Route;


// Rotta per la homepage, restituisce la vista 'home'
Route::get('/homepage', function () {
    return view('home');
})->name('homepage');


// Rotta per la pagina "about", restituisce la vista 'about'
Route::get('/about', function () {
    return view('about');
})->name('about');


// Rotta per la pagina di contatto, restituisce la vista 'contact'
Route::get('/contact', function (){
    return view('contact');
})->name('contact');





