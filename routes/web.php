<?php

use Illuminate\Support\Facades\Route;


Route::get('/profil', function () {
    return view('features/profil');
});
Route::get('/berita', function () {
    return view('features/berita');
});

Route::get('/about-us', function () {
    return view('features/aboutUs');
});

Route::get('/hubungi-kami', function () {
    return view('features/hubungiKami');

Route::get('/', function () {
    return view('features/beranda');
});
Route::get('/tentang', function () {
    return view('features/tentang');

});

