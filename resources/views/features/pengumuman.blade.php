@extends('layouts.main')
@section('title', 'Pengumuman')

@section('content')
    <div class="w-full  overflow-hidden lg:px-12 flex flex-col items-center pt-40">
        <div class="flex flex-col w-11/12 gap-5 mb-10">
            <p class="text-primary text-xl font-bold">Daftar Pengumuman</p>
            <hr>
            @foreach ($pengumuman as $item)
                <a href="{{ route('pengumuman-detail', ['id' => $item->id]) }}"
                    class="w-full rounded-lg group p-4 shadow flex flex-col gap-3 hover:scale-105 border border-gray-300 hover:shadow-lg hover:text-yellow-300 transition-all">
                    <h1 class="text-md font-medium">{{ $item->judul }}</h1>
                    <hr>
                    <p class="text-xs text-gray-500">{{ $item->isi_pengumuman }}</p>
                    <div class="flex justify-between items-center">

                        <p class="text-xs text-gray-500">{{ $item->created_at }}</p>
                        <div
                            class="flex w-fit text-primary group-hover:text-yellow-300 justify-end text-sm items-center gap-3">
                            <p>Selengkapnya</p>
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            @endforeach

            <div class="paginate">
                {{ $pengumuman->links() }}
            </div>
        </div>










    </div>
    @include('components/backToTopBtn')
    </div>
@endsection
