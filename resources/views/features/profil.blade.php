@extends('layouts.main')
@section('title', 'Profile')

@section('content')
	<!-- memanggil navbar -->

	{{-- Konten Profil --}}
	<!-- Konten Profil -->
	<div class="mx-auto w-full overflow-hidden lg:px-12">
		<div class="container mx-auto mt-0 flex min-h-screen flex-col justify-center text-center max-md:px-7">
			<h1 class="mb-2 text-5xl font-bold text-primary max-md:text-3xl">Profil</h1>
			<p class="text-primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda qui rem</p>
		</div>


		<!-- Konten Visi dan Misi -->
		<div
			class="container mx-auto mb-0 mt-0 gap-10 text-center max-lg:w-10/12 max-lg:px-4 max-lg:py-8 max-md:gap-y-10 lg:w-11/12">

			<!-- Kontainer Visi -->
			<div class="container flex duration-300 hover:scale-105 max-md:max-h-full max-md:w-full max-md:flex-col">
				<!-- Bagian Judul Visi -->
				<div
					class="flex w-2/5 items-center justify-center bg-primary transition-transform duration-300 hover:scale-105 max-md:h-20 max-md:w-full">
					<h1 class="text-7xl font-bold text-white max-md:text-3xl">Visi</h1>
				</div>

				<!-- Kontainer Deskripsi Visi -->
				<div
					class="flex w-3/5 items-center justify-center border-2 border-primary px-5 py-12 shadow-md transition-transform duration-300 hover:scale-105 max-md:w-full max-md:px-8 max-md:py-4">
					<h1 class="text-md text-justify font-medium text-primary max-md:text-sm lg:px-12">
						Muhammadiyah sebagai gerakan Islam yang berlandaskan Al-Qur’an dan As-Sunnah dengan watak tajdid yang dimilikinya
						senantiasa istiqomah dan aktif dalam melaksanakan dakwah Islam amar ma’ruf nahi munkar di semua bidang dalam upaya
						mewujudkan Islam sebagai rahmatan lil’ alamin menuju terciptanya/ terwujudnya masyarakat Islam yang
						sebenar-benarnya.
					</h1>
				</div>
			</div>

			<!-- Kontainer Misi -->
			<div
				class="container mt-5 flex flex-row-reverse duration-300 hover:scale-105 max-md:max-h-full max-md:w-full max-md:flex-col">

				<!-- Bagian Judul Misi (Desktop di sebelah kanan) -->
				<div
					class="flex w-2/5 items-center justify-center bg-primary transition-transform duration-300 hover:scale-105 max-md:order-1 max-md:h-20 max-md:w-full">
					<h1 class="text-7xl font-bold text-white max-md:text-3xl">Misi</h1>
				</div>

				<!-- Kontainer Deskripsi Misi -->
				<div
					class="flex w-3/5 items-center justify-start border-2 border-primary px-5 py-12 shadow-md transition-transform duration-300 hover:scale-105 max-md:w-full max-md:px-8 max-md:py-4">
					<h1 class="text-md text-justify font-medium text-primary max-md:text-sm lg:px-12">
						Misi Muhammadiyah sebagai gerakan Islam, dakwah amar ma’ruf nahi munkar memiliki misi:
						Menegakkan keyakinan tauhid yang murni sesuai dengan ajaran Allah SWT yang dibawa oleh para Rasul sejak Nabi Adam
						AS hingga Nabi Muhammad SAW.
						Menggunakan akal fikiran sesuai dengan jiwa ajaran Islam untuk menjawab dan menyelesaikan persoalan-persoalan
						kehidupan.
						Menyebarluaskan ajaran Islam yang bersumber pada Al-Qur’an dan Sunnah Rasul untuk pedoman hidup umat manusia.
						Mewujudkan amalan-amalan Islam dalam kehidupan pribadi, keluarga, dan masyarakat.
					</h1>
				</div>

			</div>
		</div>



		<!-- Konten Struktur Organisasi -->
		<div class="container mx-auto flex min-h-screen flex-col items-center justify-center py-3 max-md:w-10/12 lg:w-11/12">
			<h2 class="mb-10 text-center text-5xl font-bold text-primary max-md:text-3xl">Struktur Organisasi</h2>

			<!-- Kontainer CEO (Gambar di kiri, Sambutan di kanan) -->
			{{-- <div class="mb-8 flex w-10/12 flex-col items-center p-8 md:flex-row md:items-start md:text-left">
				<!-- Gambar CEO -->
				<img src="{{ asset('img/ketua PDM.jpg') }}" alt="CEO"
					class="mb-4 h-60 w-60 rounded-full object-cover shadow-md duration-300 hover:scale-105 max-md:h-60 max-md:w-60 md:mb-0 md:mr-8">

				<!-- Sambutan dan Info CEO -->
				<div class="my-auto ml-3 flex flex-col items-center text-center duration-300 hover:scale-105 md:items-start">
					<p class="mb-4 text-center text-primary max-md:text-sm md:text-left">
						"Selamat datang di struktur organisasi kami. Dengan komitmen tinggi, kami siap membawa perusahaan ini menuju
						kesuksesan bersama. Mari kita mencapai visi dan misi yang telah kita tentukan."
					</p>
					<h3 class="text-2xl font-bold text-primary max-md:text-lg">Andi Syamiluddin, S.Pd.,M.Pd. I</h3>
					<p class="text-primary">Ketua Pimpinan Daerah Muhammadiyah</p>
				</div>
			</div> --}}

			<!-- Kontainer Anggota Tim -->
			<div
				class="container mx-auto mt-10 flex flex-wrap justify-center gap-8 max-md:mx-3 max-md:grid max-md:grid-cols-2 max-md:grid-rows-2 max-md:gap-2">
				<!-- Anggota Tim 1 -->
				<div class="flex w-64 rounded-sm flex-col items-center bg-primary p-6 max-md:w-fit">
					<img src="{{ asset('img/ketua PDM.jpg') }}" alt="Ketua PDM" class="mb-4 h-28 w-28 rounded-full object-cover">
					<h3 class="max-md:text-md text-md text-center font-semibold text-white">Andi Syamiluddin, S.Pd.,M.Pd. I</h3>
					<p class="text-center text-xs text-white max-md:text-sm">Ketua Pimpinan Daerah Muhammadiyah</p>
				</div>

				<!-- Anggota Tim 2 -->
				<div class="flex rounded-sm  w-64 flex-col items-center bg-primary p-6 max-md:w-fit">
					<img src="{{ asset('img/Sekretaris-PDM.jpg') }}" alt="Nama Anggota 2"
						class="mb-4 h-28 w-28 rounded-full object-cover">
					<h3 class="max-md:text-md text-md text-center font-semibold text-white">Syaifuddin, SH., S.Pd., M.Pd</h3>
					<p class="text-center text-xs text-white max-md:text-sm">Sekretaris Pimpinan Daerah Muhammadiyah</p>
				</div>

				<!-- Anggota Tim 3 -->
				<div class="flex w-64 rounded-sm  flex-col items-center bg-primary p-6 max-md:w-fit">
					<img src="{{ asset('img/Kepala Disdakmen.jpg') }}" alt="Nama Anggota 3"
						class="mb-4 h-28 w-28 rounded-full object-cover">
					<h3 class="max-md:text-md text-md text-center font-semibold text-white">Nandi Matjtja Moenta, S.Sos</h3>
					<p class="text-center text-xs text-white max-md:text-sm">Kepala Dinas Pendidikan Dasar dan Menengah Kab. Pinrang</p>
				</div>

				<!-- Anggota Tim 4 -->
				<div class="flex w-64 flex-col rounded-sm  items-center bg-primary p-6 max-md:w-fit">
					<img src="{{ asset('img/Sekretaris Disdakmen.jpg') }}" alt="Nama Anggota 4"
						class="mb-4 h-28 w-28 rounded-full object-cover">
					<h3 class="max-md:text-md text-md text-center font-semibold text-white">Nama Anggota 1</h3>
					<p class="text-center text-xs text-white max-md:text-sm">Sekretaris Dinas Pendidikan Dasar dan Menengah Kab. Pinrang
					</p>
				</div>
			</div>
		</div>
		@include('components/backToTopBtn')
	</div>




@endsection
