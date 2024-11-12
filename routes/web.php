<?php

use App\Models\Berita;
use App\Models\Pengumuman;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('features/beranda');
})->name('beranda');

Route::get('/profil', function () {
    return view('features/profil');
})->name('profil');
Route::get('/berita', function () {
    $beritaList = Berita::paginate(8);
    return view('features/berita', compact('beritaList'));
})->name('berita');

Route::get('/berita/detail/{id}', function ($id) {
    $berita = Berita::where('id', $id)->first();
    return view('features/detailBerita');
})->name('berita-detail');

Route::get('/pengumuman', function () {
    $pengumuman = Pengumuman::paginate(8);
    return view('features/pengumuman', compact('pengumuman'));
})->name('pengumuman');
Route::get('/pengumuman/detail/{id}', function ($id) {
    $pengumuman = Pengumuman::find($id);
    return view('features/pengumumanDetail', compact('pengumuman'));
})->name('pengumuman-detail');
Route::get('/madrasah', function () {
    // $pengumuman = Pengumuman::find($id);
    return view('features/madrasah');
})->name(name: 'madrasah');

// Route::get('/about-us', function () {
//     return view('features/aboutUs');
// });

// Route::get('/hubungi-kami', function () {
//     return view('features/hubungiKami');


// });


// Route::get('/navbar', function () {
//     return view('components/navbar');
// });

Route::get('/syarat-dan-ketentuan', function () {
    return view('features/snk');
})->name('syarat-dan-ketentuan');
