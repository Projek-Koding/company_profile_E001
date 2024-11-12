@extends('layouts.main')
@section('title', 'Berita')

@section('content')

    <div class="w-full mx-auto overflow-hidden bg-gray-50">

        <div class="container mx-auto mt-5 flex min-h-screen flex-col justify-center text-center max-md:px-7 lg:w-11/12">
            <h1 class="mb-2 text-5xl font-bold text-primary max-md:text-3xl">Halaman Berita</h1>
            <p class="mb-5 text-primary">Berikut adalah berita terbaru yang dapat Anda baca lebih lanjut.</p>
        </div>
        {{-- Tambahkan form pencarian --}}
        <div class="w-full mx-auto  bg-primary">
            <div class="w-11/12 mx-auto min-h-screen p-8">
                <div class="grid grid-cols-4 grid-rows-2 gap-6 max-md:grid-cols-1">
                    @foreach ($beritaList as $berita)
                        <div
                            class="group relative rounded-xl transform bg-white text-primary shadow-md transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                            <img src="{{ asset('/storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                                class=" h-48 rounded-t-xl w-full object-cover">
                            <div class="p-5 ">
                                <p class="mb-1 w-max  text-gray-500 text-xs font-medium">{{ $berita->created_at }}</p>
                                <h3
                                    class=" text-lg hover:underline font-medium transition-colors duration-300 group-hover:text-yellow-400 line-clamp-2">
                                    <a href="{{ url('/berita/' . $berita->slug) }}">{{ $berita->judul }}</a>

                                </h3>
                                {{-- <p class="text-gray-700 mb-5 duration-300 text-xs group-hover:text-gray-800">
                            {{ $berita['deskripsi'] }}
                        </p> --}}
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="pagination w-full !text-white mt-4">
                    {{ $beritaList->links() }}
                </div>
                @include('components/backToTopBtn')
            </div>

            <style>
                .pagination p {
                    color: white;
                }
            </style>
        @endsection
