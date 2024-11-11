@extends('layouts.main')
@section('title', 'Berita')

@section('content')

	<div class="w-full mx-auto overflow-hidden bg-gray-50">
		<div class="container mx-auto mt-5 flex min-h-screen flex-col justify-center text-center max-md:px-7 lg:w-11/12">
			<h1 class="mb-2 text-5xl font-bold text-primary max-md:text-3xl">Halaman Berita</h1>
			<p class="mb-5 text-primary">Berikut adalah berita terbaru yang dapat Anda baca lebih lanjut.</p>
		</div>

		{{-- Tambahkan form pencarian --}}
		<div class="w-full mx-auto mb-10 bg-primary">
			<div class="w-11/12 mx-auto min-h-screen p-8">
				<div class="grid grid-cols-4 grid-rows-2 gap-6 max-md:grid-cols-1">

					@php
						// Data berita sebagai simulasi
						$beritaList = [
						    [
						        'id' => 1,
						        'judul' => 'Judul Berita 1',
						        'tanggal' => '5 November 2024',
						        'deskripsi' => 'Deskripsi singkat berita 1...',
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
						        'gambar' =>
						            'https://asset-2.tstatic.net/makassar/foto/bank/images/Kuasa-hukum-Raymond-Kamil-1-7112024.jpg',
						    ],
						    [
						        'id' => 4,
						        'judul' => 'Judul Berita 4',
						        'tanggal' => '5 November 2024',
						        'deskripsi' => 'Deskripsi singkat berita 4...',
						        'gambar' => 'https://www.suaramuhammadiyah.id/storage/posts/image/1000268498-20241107155308.jpg',
						    ],
						    [
						        'id' => 5,
						        'judul' => 'Judul Berita 5',
						        'tanggal' => '5 November 2024',
						        'deskripsi' => 'Deskripsi singkat berita 5...',
						        'gambar' =>
						            'https://pwmjateng.com/wp-content/uploads/2024/11/Gambar-WhatsApp-2024-11-08-pukul-15.02.49_e94bc7f2.jpg',
						    ],
						    [
						        'id' => 6,
						        'judul' => 'Judul Berita 6',
						        'tanggal' => '5 November 2024',
						        'deskripsi' => 'Deskripsi singkat berita 6...',
						        'gambar' => 'https://muhammadiyah.or.id/wp-content/uploads/2024/11/Dubes-Malaysia-2-750x536.jpeg',
						    ],
						    [
						        'id' => 7,
						        'judul' => 'Judul Berita 7',
						        'tanggal' => '5 November 2024',
						        'deskripsi' => 'Deskripsi singkat berita 7...',
						        'gambar' =>
						            'https://akcdn.detik.net.id/visual/2018/04/12/7ed3616b-a2f6-4220-abe0-49112833c5d1_169.jpeg?w=650&q=90',
						    ],
						    [
						        'id' => 8,
						        'judul' => 'Judul Berita 8',
						        'tanggal' => '5 November 2024',
						        'deskripsi' => 'Deskripsi singkat berita 8...',
						        'gambar' => 'https://www.suaramuhammadiyah.id/storage/posts/image/UM_Sukabumi-20240505210504.jpeg',
						    ],
						];
					@endphp

					{{-- Menggunakan foreach untuk loop card berita --}}
					@foreach ($beritaList as $berita)
                    <div
                    class="group relative rounded-xl transform bg-white text-primary shadow-md transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <img src="{{ $berita['gambar'] }}" alt="{{ $berita['judul'] }}" class=" h-48 rounded-t-xl w-full object-cover">
                    <div class="p-5 ">
                        <p class="mb-1 w-max  text-gray-500 text-xs font-medium">{{ $berita['tanggal'] }}</p>

                        <h3 class=" text-lg hover:underline font-medium transition-colors duration-300 group-hover:text-yellow-400 line-clamp-2">
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


@endsection
