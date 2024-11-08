@extends('layouts.main')
@section('title', 'Profile')

@section('content')
	<!-- memanggil navbar -->
	@include('components.navbar')
	{{-- Konten Profil --}}
	<!-- Konten Profil -->
	<div class="container-fluid overflow-hidden bg-gray-50">
		<div class="container mx-auto mt-0 flex min-h-screen flex-col justify-center text-center max-md:px-7">
			<h1 class="mb-2 text-5xl font-bold text-primary max-md:text-3xl">Halaman Profil</h1>
			<p class="text-primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda qui rem</p>
		</div>

		<!-- Konten Visi dan Misi -->
		<div
			class="container mx-auto mb-0 mt-0 grid min-h-screen justify-center gap-10 py-11 text-center max-md:gap-y-10 max-md:px-7 max-md:py-8">

			<!-- Kontainer Visi -->
			<div class="container flex bg-yellow-300 shadow-md duration-300 hover:scale-105 max-md:grid max-md:max-h-36">
				<div
					class="container flex w-2/5 items-center justify-center bg-primary transition-transform duration-300 hover:scale-105 max-md:h-32 max-md:w-full">
					<h1 class="text-7xl font-bold text-white max-md:text-4xl">Visi</h1>
				</div>

				<!-- Kontainer Deskripsi Visi -->
				<div
					class="container flex w-3/5 items-center justify-center bg-white px-7 transition-transform duration-300 hover:scale-105 max-md:h-64 max-md:w-full">
					<h1 class="text-md text-justify font-semibold text-primary max-md:text-sm max-md:font-medium">
						Muhammadiyah sebagai gerakan Islam yang berlandaskan Al – Qur’an dan As – Sunnah dengan watak tajdid yang
						dimilikinya senantiasa istiqomah dan aktif dalam melaksanakan dakwah Islam amar ma’ruf nahi munkar di semua bidang
						dalam upaya mewujudkan Islam sebagai rahmatan lil’ alamin menuju terciptanya/ terwujudnya masyarakat Islam yang
						sebenar-benarnya.
					</h1>
				</div>

			</div>
			<!-- Kontainer Misi -->
			<!-- Kontainer List Misi -->
			<div class="container flex shadow-md duration-300 hover:scale-105 max-md:grid max-md:max-h-36">
				<div
					class="container flex w-3/5 items-center justify-start bg-white px-7 transition-transform duration-300 hover:scale-105 max-md:h-64 max-md:w-full">
					<h1 class="text-md text-justify font-semibold text-primary max-md:text-sm max-md:font-medium">
						Misi Muhammadiyah sebagai gerakan Islam, dakwah amar ma’ruf nahi Munkar memiliki misi :
Menegakkan keyakinan tauhid yang murni sesuai dengan ajaran allah swt yang dibawa oleh para Rasul sejak Nabi Adam as. Hingga Nabi Muhammad saw. Akal fikiran sesuai dengan jiwa ajaran Islam untuk menjawab dan menyelesaikan persoalan- persoalan kehidupan. Menyebarluaskan ajaran Islam yang bersumber pada Al- Qur’an sebagai kitab Allah terakhir dan Sunnah Rasul untuk pedoman hidup umat manusia. Mewujudkan amalan – amalan Islam dalam kehidupan pribadi, keluarga dan masyarakat.

					</h1>
					</h1>
				</div>


				<div
					class="container flex w-2/5 items-center justify-center bg-primary transition-transform duration-300 hover:scale-105 max-md:h-32 max-md:w-full">
					<h1 class="text-7xl font-bold text-white max-md:text-3xl">Misi</h1>
				</div>
			</div>

		</div>

		<!-- Konten Struktur Organisasi -->
		<div class="container mx-auto mb-10 mt-8 flex min-h-screen flex-col items-center justify-center py-5">
			<h2 class="mb-10 text-center text-5xl font-bold text-primary max-md:text-3xl">Struktur Organisasi</h2>

			<!-- Kontainer CEO (Gambar di kiri, Sambutan di kanan) -->
			<div class="mb-8 flex w-10/12 flex-col items-center p-8 md:flex-row md:items-start md:text-left">
				<!-- Gambar CEO -->
				<img src="https://randomuser.me/api/portraits/men/10.jpg" alt="CEO"
					class="mb-4 h-60 w-60 rounded-full object-cover shadow-md duration-300 hover:scale-105 max-md:h-60 max-md:w-60 md:mb-0 md:mr-8">

				<!-- Sambutan dan Info CEO -->
				<div class="my-auto ml-3 flex flex-col items-center text-center duration-300 hover:scale-105 md:items-start">
					<p class="mb-4 text-center text-primary max-md:text-sm md:text-left">
						"Selamat datang di struktur organisasi kami. Dengan komitmen tinggi, kami siap membawa perusahaan ini menuju
						kesuksesan bersama. Mari kita mencapai visi dan misi yang telah kita tentukan."
					</p>
					<h3 class="text-2xl font-bold text-primary max-md:text-lg">Kepala Organisasi</h3>
					<p class="text-primary">CEO & Founder</p>
				</div>
			</div>

			<!-- Kontainer Anggota Tim -->
			<div
				class="flex flex-wrap justify-center gap-8 max-md:mx-3 max-md:grid max-md:grid-cols-2 max-md:grid-rows-2 max-md:gap-2">
				<!-- Anggota Tim 1 -->
				<div class="flex w-56 flex-col items-center bg-primary p-6 max-md:w-48">
					<img src="https://randomuser.me/api/portraits/women/11.jpg" alt="Nama Anggota 1"
						class="mb-4 h-28 w-28 rounded-full object-cover">
					<h3 class="max-md:text-md text-center text-xl font-semibold text-white">Nama Anggota 1</h3>
					<p class="text-md text-white max-md:text-sm">Jabatan</p>
				</div>

				<!-- Anggota Tim 2 -->
				<div class="flex w-56 flex-col items-center bg-primary p-6 max-md:w-48">
					<img src="https://randomuser.me/api/portraits/men/12.jpg" alt="Nama Anggota 2"
						class="h-28 w-28 rounded-full object-cover">
					<h3 class="max-md:text-md text-center text-xl font-semibold text-white">Nama Anggota 1</h3>
					<p class="text-md text-white max-md:text-sm">Jabatan</p>
				</div>

				<!-- Anggota Tim 3 -->
				<div class="flex w-56 flex-col items-center bg-primary p-6 max-md:w-48">
					<img src="https://randomuser.me/api/portraits/women/13.jpg" alt="Nama Anggota 3"
						class="mb-4 h-28 w-28 rounded-full object-cover">
					<h3 class="max-md:text-md text-center text-xl font-semibold text-white">Nama Anggota 1</h3>
					<p class="text-md text-white max-md:text-sm">Jabatan</p>
				</div>

				<!-- Anggota Tim 4 -->
				<div class="flex w-56 flex-col items-center bg-primary p-6 max-md:w-48">
					<img src="https://randomuser.me/api/portraits/men/14.jpg" alt="Nama Anggota 4"
						class="mb-4 h-28 w-28 rounded-full object-cover">
					<h3 class="max-md:text-md text-center text-xl font-semibold text-white">Nama Anggota 1</h3>
					<p class="text-md text-white max-md:text-sm">Jabatan</p>
				</div>
			</div>
		</div>



		@include('components.footer')




	</div>




@endsection
