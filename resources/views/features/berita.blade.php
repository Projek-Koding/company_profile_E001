@extends('layouts.main')
@section('title', 'Berita')

@section('content')

	@php
		// Data berita sebagai simulasi
		$beritaList = [
		    [
		        'id' => 1,
		        'judul' =>
		            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni expedita voluptas ea non odio quasi praesentium error quidem dolorem! Commodi quibusdam molestiae consectetur amet ut veniam mollitia velit iste odit.',
		        'tanggal' => '5 November 2024',
		        'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. ',
		        'gambar' =>
		            'https://awsimages.detik.net.id/community/media/visual/2022/07/13/ilustrasi-baca-berita_169.jpeg?w=1200',
		    ],
		    [
		        'id' => 2,
		        'judul' => 'Judul Berita 2',
		        'tanggal' => '5 November 2024',
		        'deskripsi' => 'Deskripsi singkat berita 2...',
		        'gambar' => 'https://bbpmpsulsel.kemdikbud.go.id/assets/images/3afdf8eed4c601ca8ac8e4445194cf36.jpeg',
		    ],
		    [
		        'id' => 3,
		        'judul' => 'Judul Berita 3',
		        'tanggal' => '5 November 2024',
		        'deskripsi' => 'Deskripsi singkat berita 3...',
		        'gambar' => 'https://asset-2.tstatic.net/makassar/foto/bank/images/Kuasa-hukum-Raymond-Kamil-1-7112024.jpg',
		    ],
		    [
		        'id' => 4,
		        'judul' => 'Judul Berita 4',
		        'tanggal' => '5 November 2024',
		        'deskripsi' => 'Deskripsi singkat berita 3...',
		        'gambar' => 'https://asset-2.tstatic.net/makassar/foto/bank/images/Kuasa-hukum-Raymond-Kamil-1-7112024.jpg',
		    ],
            [
		        'id' => 5,
		        'judul' => 'Judul Berita 5',
		        'tanggal' => '5 November 2024',
		        'deskripsi' => 'Deskripsi singkat berita 3...',
		        'gambar' => 'https://asset-2.tstatic.net/makassar/foto/bank/images/Kuasa-hukum-Raymond-Kamil-1-7112024.jpg',
		    ],
		];
	@endphp
	<div class="mx-auto w-full overflow-hidden bg-gray-50">

		<div class="container mx-auto mt-5 flex min-h-screen flex-col justify-center text-center max-md:px-7 lg:w-11/12">
			<h1 class="mb-2 text-5xl font-bold text-primary max-md:text-3xl">Halaman Berita</h1>
			<p class="mb-5 text-primary">Berikut adalah berita terbaru yang dapat Anda baca lebih lanjut.</p>
		</div>

		{{-- Tambahkan form pencarian --}}
		<div class="mx-auto mb-10 w-full bg-primary">
			<div class="mx-auto min-h-screen w-11/12 p-8">
				<div class="grid grid-cols-4 grid-rows-2 gap-6 max-md:grid-cols-1">

					{{-- Menggunakan foreach untuk loop card berita --}}

					@foreach ($beritaList as $berita)
						<div
							class="group relative transform rounded-xl bg-white text-primary shadow-md transition-all duration-300 hover:scale-105 hover:shadow-2xl">
							<img src="{{ $berita['gambar'] }}" alt="{{ $berita['judul'] }}" class="h-48 w-full rounded-t-xl object-cover">
							<div class="p-5">
								<p class="mb-1 w-max text-xs font-medium text-gray-500">{{ $berita['tanggal'] }}</p>

								<h3
									class="line-clamp-2 text-lg font-medium transition-colors duration-300 hover:underline group-hover:text-yellow-400">
									<a href="{{ url('/berita/detail/' . $berita['id']) }}">{{ $berita['judul'] }}</a>

								</h3>
								{{-- <p class="text-gray-700 mb-5 duration-300 text-xs group-hover:text-gray-800">
                            {{ $berita['deskripsi'] }}
                        </p> --}}
							</div>

						</div>
					@endforeach


				</div>
				@include('components/backToTopBtn')
			</div>
        </div>



		@endsection
