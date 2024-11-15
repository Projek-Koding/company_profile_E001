<?php

use App\Models\AnggotaMajelis;
use App\Models\Berita;
use App\Models\Majelis;
use App\Models\Pengumuman;

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $listBerita = Berita::orderBy('created_at', 'desc')->limit(4)->get();
    return view('features/beranda', compact('listBerita'));
})->name('beranda');


Route::get('/profil', function () {
    return view('features/profil');
})->name('profil');

Route::get('/berita', function () {
    $beritaList = Berita::Paginate(8);
    return view('features/berita', compact('beritaList'));
})->name('berita');


Route::get('/berita/{slug}', function ($slug) {
    $berita = Berita::where('slug', $slug)->first();
    $beritaLainnya = Berita::inRandomOrder()->take(5)->get();
    return view('features/detailBerita', compact('berita', 'beritaLainnya'));
})->name('berita-detail');

Route::get('/pengumuman', function () {
    $pengumuman = Pengumuman::paginate(8);
    return view('features/pengumuman', compact('pengumuman'));
})->name('pengumuman');
Route::get('/pengumuman/detail/{id}', function ($id) {
    $pengumuman = Pengumuman::find($id);
    return view('features/pengumumanDetail', compact('pengumuman'));
})->name('pengumuman-detail');
Route::get('/majelis', function () {
    // $pengumuman = Pengumuman::find($id);
    $majelisList = Majelis::get();
    return view('features/majelis', compact('majelisList'));
})->name(name: 'majelis');
Route::get('/syarat-dan-ketentuan', function () {
    // $pengumuman = Pengumuman::find($id);
    return view('features/snk');
})->name(name: 'syarat-dan-ketentuan');

Route::get('/tentang', function () {
    return view('features/tentang');
})->name('tentang');
Route::get('/majelisDetail/{id}', function ($id) {
    $majelis = Majelis::find($id);
    $ketua = AnggotaMajelis::where('majelis_id', $id)->where('jabatan', 'ketua')->first();
    $wakil = AnggotaMajelis::where('majelis_id', $id)->where('jabatan', 'wakil ketua')->get();
    $sekretaris = AnggotaMajelis::where('majelis_id', $id)->where('jabatan', 'sekretaris')->get();
    $anggotaMajelis = AnggotaMajelis::where('majelis_id', $id)->where('jabatan', 'anggota')->get();
    return view('features/majelisDetail', compact('anggotaMajelis', 'ketua', 'wakil', 'sekretaris', 'majelis'));
})->name('majelisDetail');
