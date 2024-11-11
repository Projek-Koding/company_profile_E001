<?php

use App\Models\Berita;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('features/beranda');
});

Route::get('/profil', function () {
    return view('features/profil');
});
Route::get('/berita', function () {
    $beritaList = Berita::paginate(8);
    return view('features/berita', compact('beritaList'));
});

Route::get('/berita/detail/{id}', function ($id) {
    $berita = Berita::where('id', $id)->first();
    return redirect('/berita/' . $berita->slug);

// Route::get('/about-us', function () {
//     return view('features/aboutUs');
// });

// Route::get('/hubungi-kami', function () {
//     return view('features/hubungiKami');


// });


// Route::get('/navbar', function () {
//     return view('components/navbar');
// });

Route::get('/tentang', function () {
    return view('features/tentang');

});



