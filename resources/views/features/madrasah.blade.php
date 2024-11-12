@extends('layouts.main')
@section('title', 'Madrasah')



@section('content')
<div class="min-h-screen pt-40 container mx-auto px-4 py-8">
    <div class="mx-auto max-w-6xl">
        <h1 class="mb-8 text-4xl font-bold text-center text-primary">Daftar Majelis</h1>
        <p class="text-center text-gray-600 mb-12">
            Temukan berbagai majelis dengan kegiatan yang menarik untuk memperdalam pengetahuan dan spiritualitas Anda.
        </p>

        <!-- Daftar Majelis -->
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @php
                $majelisList = [
                    [
                        'nama' => 'Majelis Taklim Al-Ikhlas',
                        'deskripsi' => 'Majelis ini membahas kajian keagamaan secara mendalam setiap minggu.',
                    ],
                    [
                        'nama' => 'Majelis Dzikir An-Nur',
                        'deskripsi' => 'Rutin mengadakan dzikir bersama setiap bulan di malam Jumat.',
                    ],
                    [
                        'nama' => 'Majelis Ilmu Nurul Huda',
                        'deskripsi' => 'Kajian kitab klasik setiap Rabu malam.',
                    ],
                    [
                        'nama' => 'Majelis Shalawat Al-Barokah',
                        'deskripsi' => 'Mengadakan shalawat bersama setiap minggu.',
                    ],
                    [
                        'nama' => 'Majelis Tauhid Al-Muttaqin',
                        'deskripsi' => 'Kajian tauhid dan fiqh setiap bulan.',
                    ],
                    [
                        'nama' => 'Majelis Tahfidz Al-Furqan',
                        'deskripsi' => 'Menghafal Al-Quran bersama setiap sore.',
                    ],
                ];
            @endphp

            @foreach ($majelisList as $majelis)
                <div class="group overflow-hidden rounded-xl bg-white shadow-lg transition-transform duration-300 hover:scale-105">
                    <div class="p-5">
                        <h2 class="mb-2 text-xl font-semibold text-primary group-hover:text-yellow-500 hover:un"><a href="#">{{ $majelis['nama'] }}</a></h2>
                        <p class="text-gray-600">{{ $majelis['deskripsi'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

