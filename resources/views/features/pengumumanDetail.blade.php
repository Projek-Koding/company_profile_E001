@extends('layouts.main')
@section('title', 'Pengumuman')
@section('content')
    <div class="w-full flex justify-center ">
        <div class="flex w-11/12 min-h-screen flex-col h-fit pt-52 lg:pt-36">
            <div class="flex justify-between items-center">
                <p class="text-primary text-xl font-bold">Pengumuman</p>
                <a href="{{ route('pengumuman') }}"
                    class="w-fit px-4 py-2 hidden active:scale-95 lg:flex text-primary border border-primary rounded-sm justify-end text-sm items-center gap-3">
                    <p>kembali</p>
                </a>
            </div>

            <hr class="mt-4">
            <div class="shadow mt-4 flex flex-col gap-4 p-4 border rounded-md border-r-gray-300">
                <h1 class="text-md font-semibold">{{ $pengumuman->judul }}</h1>
                <hr>
                <p class="text-sm text-gray-500">{{ $pengumuman->isi_pengumuman }}</p>
                <p class="text-sm text-gray-500">{{ $pengumuman->created_at }}</p>
            </div>
        </div>
    </div>
@endsection
