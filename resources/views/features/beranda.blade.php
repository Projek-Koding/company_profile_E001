@extends('layouts.main')

@section('content')
	<!-- Hero Section -->
	{{-- <div class="container mx-auto w-11/12 bg-primary min-h-screen text-white"> --}}
	<!-- Kontainer Hero Section -->
	<div
		class="mx-auto flex min-h-screen w-full flex-wrap justify-center overflow-auto bg-primary text-center max-xl:hidden max-md:px-7 md:text-left">
		<!-- Bagian Kiri: Ucapan Selamat Datang -->
		<div class="mb-6 flex w-full flex-col justify-center pl-40 md:mb-0 md:w-1/2">
			<h1 class="mb-4 text-3xl font-bold text-white max-md:text-3xl">Selamat Datang di Laman Pimpinan Daerah Muhammadiyah
				Kab. Pinrang</h1>
			<p class="text-md mb-6 text-white max-md:text-sm">
				Kami hadir untuk memberikan informasi terbaru dan kegiatan Muhammadiyah di Kab. Pinrang.
			</p>
			<a href="#"
				class="mx-auto w-fit rounded-sm bg-white px-6 py-2 font-semibold text-primary duration-300 hover:scale-105 hover:bg-gray-300 md:mx-0">Pelajari
				Lebih Lanjut</a>
		</div>

		<!-- Bagian Kanan: Gambar Kantor dengan Gradien Overlay -->
		<div class="relative flex h-80 w-full items-center justify-center md:h-full md:w-1/2">
			<div class="relative h-full w-full overflow-hidden rounded-lg">
				<img src="{{ asset('img/kantor PDM.jpg') }}" alt="Gambar Kantor Muhammadiyah"
					class="h-full w-full object-cover shadow-lg">

				<!-- Layer Gradien Memudar dari Primary ke Transparan -->
				<div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/20 to-transparent"></div>

				<!-- Layer Kabut Gelap untuk gambar -->
				<div class="absolute inset-0 rounded-lg bg-primary bg-opacity-60"></div>
			</div>
		</div>
	</div>
	<!-- Tampilan Mobile -->
	<div class="relative flex h-screen w-full flex-col items-center justify-center bg-cover bg-center xl:hidden"
		style="background-image: url('{{ asset('img/kantor PDM.jpg') }}');">
		<!-- Layer Kabut Gelap untuk gambar -->
		<div class="absolute inset-0 rounded-lg bg-primary bg-opacity-60"></div>

		<!-- Layer Gelap untuk Membuat Teks Lebih Terlihat -->
		<div class="absolute inset-0 bg-black/50"></div>

		<!-- Konten Teks -->
		<div class="relative z-10 px-5 text-center">
			<h1 class="mb-4 text-3xl font-bold text-white max-md:text-2xl">
				Selamat Datang di Laman Pimpinan Daerah Muhammadiyah Kab. Pinrang
			</h1>
			<p class="text-md mb-6 text-white max-md:text-sm">
				Kami hadir untuk memberikan informasi terbaru dan kegiatan Muhammadiyah di Kab. Pinrang.
			</p>
			<a href="#"
				class="mx-auto w-fit bg-white px-6 py-2 font-semibold text-primary duration-300 hover:scale-105 hover:bg-gray-300">
				Pelajari Lebih Lanjut
			</a>
		</div>
	</div>


	</div>

	<!-- Section Tentang Kami -->
	<div class="flex min-h-screen w-full flex-wrap items-center justify-center bg-white py-8 max-md:flex-col">
		<!-- Bagian Teks "TENTANG KAMI" -->
		<div class="flex justify-end p-4 max-md:w-full max-md:justify-center md:w-1/4">
			<h2 class="text-center text-3xl font-bold text-primary max-md:text-xl md:text-right">
				TENTANG KAMI
			</h2>
		</div>

		<!-- Bagian Deskripsi Tentang Kami -->
		<div class="flex justify-start p-4 max-md:w-full max-md:justify-center md:w-2/4">
			<p class="w-11/12 text-left text-xl font-medium text-primary max-md:text-center">
				Muhammadiyah di Kabupaten Pinrang berperan sebagai salah satu organisasi yang mendorong kemajuan di bidang
				pendidikan, sosial, dan keagamaan.
			</p>
		</div>
	</div>
	<!-- Section Profil - Sekilas Tentang Kami -->
	<div class="w-full bg-primary py-16 text-white">
		<div class="container mx-auto px-6">
			<!-- Judul Section -->
			<div class="mb-12 text-center">
				<h2 class="mb-4 text-4xl font-extrabold uppercase tracking-wider">Sekilas Tentang Kami</h2>
				<p class="mx-auto max-w-3xl text-lg text-gray-100">
					Muhammadiyah di Kabupaten Pinrang hadir sebagai pelopor dalam berbagai kegiatan sosial, pendidikan, dan keagamaan,
					dengan semangat membangun peradaban yang lebih baik.
				</p>
			</div>

			<!-- Konten Profil dengan Grid -->
			<div class="grid grid-cols-1 gap-8 md:grid-cols-3">
				<!-- Card Profil 1 -->
				<div
					class="group relative transform rounded-sm border-l-4 border-white bg-blue-700 p-8 shadow-lg transition-all duration-300 hover:scale-105 hover:border-yellow-400 hover:shadow-2xl">
					<h3 class="mb-4 text-2xl font-semibold transition-colors duration-300 group-hover:text-yellow-400">Sejarah Singkat
					</h3>
					<p class="text-gray-100 duration-300 group-hover:text-white">
						Sejak awal abad ke-20, Muhammadiyah di Kabupaten Pinrang telah mengambil peran aktif dalam mengembangkan pendidikan
						dan kegiatan sosial di tengah masyarakat.
					</p>

				</div>

				<!-- Card Profil 2 -->
				<div
					class="group relative transform rounded-sm border-l-4 border-white bg-blue-700 p-8 shadow-lg transition-all duration-300 hover:scale-105 hover:border-yellow-400 hover:shadow-2xl">
					<h3 class="mb-4 text-2xl font-semibold transition-colors duration-300 group-hover:text-yellow-400">Visi dan Misi
					</h3>
					<p class="text-gray-100 duration-300 group-hover:text-white">
						Membangun masyarakat yang unggul dalam pendidikan, berakhlak mulia, dan berperan aktif dalam meningkatkan kualitas
						hidup umat di Kabupaten Pinrang.
					</p>

				</div>

				<!-- Card Profil 3 -->
				<div
					class="group relative transform rounded-sm border-l-4 border-white bg-blue-700 p-8 shadow-lg transition-all duration-300 hover:scale-105 hover:border-yellow-400 hover:shadow-2xl">
					<h3 class="mb-4 text-2xl font-semibold transition-colors duration-300 group-hover:text-yellow-400">Kontribusi Kami
					</h3>
					<p class="text-gray-100 duration-300 group-hover:text-white">
						Kami telah mendirikan sekolah, klinik kesehatan, dan berbagai kegiatan dakwah yang memberikan dampak positif bagi
						masyarakat di Kabupaten Pinrang.
					</p>

				</div>
			</div>

			<!-- Tombol Lebih Lanjut dengan Animasi -->
			<div class="mt-12 flex justify-center">
				<a href="#"
					class="mx-auto w-fit rounded-sm bg-white px-6 py-2 font-semibold text-primary duration-300 hover:scale-105 hover:bg-gray-300 md:mx-0">
					Pelajari Lebih Lanjut
				</a>
			</div>
		</div>
	</div>
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
		];
	@endphp


	<!-- Section Berita -->
	<div class="mt-2 min-h-screen w-full bg-white py-16 text-primary">
		<div class="container mx-auto px-6">
			<!-- Judul Section Berita -->
			<div class="mb-12 text-center">
				<h2 class="mb-4 text-4xl font-extrabold uppercase">Berita Terbaru</h2>
				<p class="mx-auto max-w-2xl text-lg text-primary">
					Temukan informasi terkini mengenai kegiatan dan perkembangan terbaru dari Muhammadiyah Kabupaten Pinrang.
				</p>
			</div>

			<!-- Konten Berita dalam Grid -->
			<div class="grid grid-cols-1 gap-8 md:grid-cols-4">
				<!-- Berita 1 -->
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

			<!-- Tombol Lihat Semua Berita -->
			<div class="mt-12 flex justify-center rounded-sm">
				<a href="/berita"
					class="mx-auto w-fit rounded-sm bg-primary px-6 py-2 font-semibold text-white duration-300 hover:scale-105 hover:bg-primary md:mx-0">
					Lihat Semua Berita
				</a>
			</div>
		</div>
	</div>
	@include('components/backToTopBtn')
  
@endsection
