<?php

use Illuminate\Support\Facades\Route;


// Route::get('/profil', function () {
//     return view('features/profil');
// });
// Route::get('/berita', function () {
//     return view('features/berita');
// });
// Route::get('/beranda', function () {
//     return view('features/beranda');
// });
// Route::get('/tentang', function () {
//     return view('features/tentang');
// });
Route::view('/', 'features/beranda')->name('beranda');
Route::view('/profil', 'features/profil')->name('profil');
Route::view('/berita', 'features/berita')->name('berita');
Route::view('/tentang', 'features/tentang')->name('tentang');

