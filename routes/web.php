<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profil', function () {
    return view('features/profil');
});
Route::get('/berita', function () {
    return view('features/berita');
});
Route::get('/navbar', function () {
    return view('components/navbar');
});
