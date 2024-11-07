@extends('layouts.main')
@section('title', 'Profile')

@section('content')
	<!-- memanggil navbar -->
	@include('components.navbar')
	{{-- Konten Profil --}}
	<!-- Konten Profil -->
	<div class="container-fluid overflow-hidden bg-gray-50">
		<div class="containermx-auto mt-0 flex min-h-screen flex-col justify-center text-center max-md:px-7">
			<h1 class="mb-2 text-5xl max-md:text-3xl font-bold text-primary">Halaman Profil</h1>
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
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam pariatur quaerat in, ullam maxime corruptitext-md
						max-md:text-sm font-semibold max-md:font-medium
						quae repellendus id nam quis facilis incidunt atque vero illum cum dolorem quasi. Accusamus, ducimus?
					</h1>
				</div>

			</div>
			<!-- Kontainer Misi -->
			<!-- Kontainer List Misi -->
			<div class="container flex shadow-md duration-300 hover:scale-105 max-md:grid max-md:max-h-36">
				<div
					class="container flex w-3/5 items-center justify-start bg-white px-7 transition-transform duration-300 hover:scale-105 max-md:h-64 max-md:w-full">
					<ul class="text-md list-inside list-disc text-left font-semibold text-primary max-md:text-sm max-md:font-medium">
						<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi nemo dolorum ab soluta eligendi aperiam vitae
						</li>
						<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel commodi nam quam. Similique modi aliquam optio
							veritatis esse consequatur laborum, !</li>
						<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. ?</li>
					</ul>
				</div>


				<div
					class="container flex w-2/5 items-center justify-center bg-primary transition-transform duration-300 hover:scale-105 max-md:h-32 max-md:w-full">
					<h1 class="text-7xl font-bold text-white max-md:text-3xl">Misi</h1>
				</div>
			</div>

		</div>

		<!-- Konten Struktur Organisasi -->
		<div class="container mx-auto mb-10 mt-8 flex min-h-screen flex-col items-center justify-center py-5">
			<h2 class="mb-10 text-5xl max-md:text-3xl text-center font-bold text-primary">Struktur Organisasi</h2>

			<!-- Kontainer CEO (Gambar di kiri, Sambutan di kanan) -->
			<div
				class="mb-8 flex w-10/12 flex-col items-center   p-8  md:flex-row md:items-start md:text-left ">
				<!-- Gambar CEO -->
				<img src="https://randomuser.me/api/portraits/men/10.jpg" alt="CEO"
					class="mb-4 h-60 w-60 max-md:h-60 max-md:w-60 rounded-full object-cover md:mb-0 md:mr-8 duration-300 hover:scale-105 shadow-md">

				<!-- Sambutan dan Info CEO -->
				<div class="flex flex-col my-auto ml-3 items-center text-center md:items-start duration-300 hover:scale-105">
					<p class="mb-4 text-center max-md:text-sm text-primary md:text-left">
						"Selamat datang di struktur organisasi kami. Dengan komitmen tinggi, kami siap membawa perusahaan ini menuju
						kesuksesan bersama. Mari kita mencapai visi dan misi yang telah kita tentukan."
					</p>
					<h3 class="text-2xl max-md:text-lg font-bold text-primary">Kepala Organisasi</h3>
					<p class="text-primary">CEO & Founder</p>
				</div>
			</div>

			<!-- Kontainer Anggota Tim -->
			<div class=" flex flex-wrap max-md:grid max-md:grid-cols-2 max-md:grid-rows-2 justify-center gap-8 max-md:gap-2 max-md:mx-3 ">
				<!-- Anggota Tim 1 -->
				<div class="flex w-56 max-md:w-48 flex-col items-center bg-primary p-6">
					<img src="https://randomuser.me/api/portraits/women/11.jpg" alt="Nama Anggota 1"
						class="mb-4 h-28 w-28 rounded-full object-cover">
					<h3 class="text-xl max-md:text-md text-center font-semibold text-white">Nama Anggota 1</h3>
					<p class="text-white text-md max-md:text-sm">Jabatan</p>
				</div>

				<!-- Anggota Tim 2 -->
				<div class="flex w-56 max-md:w-48  flex-col items-center bg-primary p-6">
					<img src="https://randomuser.me/api/portraits/men/12.jpg" alt="Nama Anggota 2"
						class=" h-28 w-28 rounded-full object-cover">
                        <h3 class="text-xl max-md:text-md text-center font-semibold text-white">Nama Anggota 1</h3>
                        <p class="text-white text-md max-md:text-sm">Jabatan</p>
				</div>

				<!-- Anggota Tim 3 -->
				<div class="flex w-56 max-md:w-48  flex-col items-center bg-primary p-6">
					<img src="https://randomuser.me/api/portraits/women/13.jpg" alt="Nama Anggota 3"
						class="mb-4 h-28 w-28 rounded-full object-cover">
                        <h3 class="text-xl max-md:text-md text-center font-semibold text-white">Nama Anggota 1</h3>
                        <p class="text-white text-md max-md:text-sm">Jabatan</p>
				</div>

				<!-- Anggota Tim 4 -->
				<div class="flex w-56 max-md:w-48  flex-col items-center bg-primary p-6">
					<img src="https://randomuser.me/api/portraits/men/14.jpg" alt="Nama Anggota 4"
						class="mb-4 h-28 w-28 rounded-full object-cover">
                        <h3 class="text-xl max-md:text-md text-center font-semibold text-white">Nama Anggota 1</h3>
                        <p class="text-white text-md max-md:text-sm">Jabatan</p>
				</div>
			</div>
		</div>



		@include('components.footer')
        



	</div>




@endsection
