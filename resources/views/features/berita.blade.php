@extends('layouts.main')
@section('title', 'Berita')

@section('content')

   
   
   
 @php
        use Carbon\Carbon;
    @endphp
	<div class="container mx-0 overflow-hidden bg-gray-50">
		<div class="container mx-auto mt-5 flex min-h-screen flex-col justify-center text-center max-md:px-7 lg:w-11/12">
			<h1 class="mb-2 text-5xl font-bold text-primary max-md:text-3xl">Halaman Berita</h1>
			<p class="mb-5 text-primary">Berikut adalah berita terbaru yang dapat Anda baca lebih lanjut.</p>
		</div>

		{{-- Tambahkan form pencarian --}}


		<div class="container mx-auto mb-10 bg-primary lg:w-11/12">
			<div class="container mx-auto min-h-screen p-8">
				<div class="grid grid-cols-4 grid-rows-2 gap-6 max-md:grid-cols-1">

					{{-- Menggunakan foreach untuk loop card berita --}}
					 @foreach ($beritaList as $berita)
                        <div class="overflow-hidden rounded-xl h-full w-full bg-white shadow-md">
                            <img src="{{ asset('/storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                                class="h-48 md:w-64 mx-auto mt-4 rounded-lg object-cover">
                            <div class="p-4">
                                <p class="mb-2 bg-gray-200 w-max p-2 rounded-md text-xs font-medium">
                                    {{ Carbon::parse($berita->created_at)->format('d F Y') }}</p>
                                <h3 class="mb-2 text-xl font-semibold text-ellipsis overflow-clip">
                                    <a href="{{ url('/berita/detail/' . $berita->id) }}">{{ $berita->judul }}</a>
                                </h3>

                            </div>
                        </div>
                    @endforeach

<div class="flex pagination justify-end mx-auto mt-5">
                    {{ $beritaList->links() }}
                </div>

				</div>
				  <style>
                    .pagination p {
                        visibility: hidden;
                    }
                </style>
			</div>
		</div>
	</div>



@endsection
