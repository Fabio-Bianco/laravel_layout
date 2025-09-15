<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/homepage', 'home')->name('homepage');

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// pagina di benvenuto (se la vuoi separata)
Route::view('/welcome', 'welcome')->name('welcome');
