<nav class="absolute z-20 w-full bg-primary py-5 text-white shadow">
	<div class="mx-auto flex items-center justify-between max-md:px-7 lg:w-11/12">
		<div class="flex items-center space-x-4">
			<a href="#"><img src="{{ asset('img/muhammadiyah-putih.png') }}"alt="Deskripsi Gambar"
					class="h-20 w-full object-contain max-md:h-28"></a>
			<h1 class="text-start text-xl font-bold max-md:text-lg">
				Pimpinan Daerah Muhammadiyah <br>
				<span class="text-sm font-semibold md:text-base">Kab. Pinrang</span>
			</h1>

		</div>
		<div class="flex flex-row">
			<ul class="hidden gap-2 rounded-sm text-white md:flex md:items-end">
				<li class="duration-300 hover:scale-105"><a href="{{ route('beranda') }}" class="navbar-menu  nav-link {{ Route::is('beranda') ? 'active' : '' }}">Beranda</a></li>
				<li class="duration-300 hover:scale-105"><a href="{{ route('profil') }}" class="navbar-menu rounded-sm nav-link {{ Route::is('profil') ? 'active' : '' }}">Profil</a></li>
				<li class="duration-300 hover:scale-105"><a href="{{ route('berita') }}" class="navbar-menu rounded-sm nav-link {{ Route::is('berita') ? 'active' : '' }}">Berita</a></li>
				<li class="duration-300 hover:scale-105"><a href="#" class="navbar-menu rounded-sm nav-link {{ Route::is('pengumuman') ? 'active' : '' }}">Pengumuman</a></li>
				<li class="duration-300 hover:scale-105"><a href="#" class="navbar-menu rounded-sm nav-link {{ Route::is('madrasah') ? 'active' : '' }}">Madrasah</a></li>
				<li class="duration-300 hover:scale-105"><a href="{{ route('tentang') }}" class="navbar-menu rounded-sm nav-link {{ Route::is('tentang') ? 'active' : '' }}">Tentang Kami</a></li>

			</ul>
		</div>
		{{-- <!-- Form Pencarian - Sekarang selalu ditampilkan -->
						<form id="search-form " class="flex transition-all duration-300">
								<input type="text" placeholder="Cari..."
										class="max-h-7 w-32 rounded-full border-2 border-primary bg-white p-2 text-xs text-primary focus:outline-none focus:ring-2 focus:ring-blue-500"
										aria-label="Search">
						</form> --}}
		<button class="ms-3 block md:hidden" id="toggle-menu" aria-expanded="false" aria-controls="mobile-menu">
			<!-- Icon Menu -->
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
			</svg>
		</button>
		<!-- Icon Pencarian -->
		{{-- <button id="search-icon " class="ms-3 hidden hover:text-blue-200 md:block">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
										stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
								</svg>
						</button> --}}
	</div>
	</div>
	<div class="container mx-auto px-7 md:hidden">
		<ul class="mt-2 hidden max-h-0 space-y-2 overflow-hidden text-sm transition-all duration-300 ease-out"
			id="mobile-menu">
			<li><a href="/" class="hover:text-blue-200 md:text-base">Beranda</a></li>
			<li><a href="/profil" class="hover:text-blue-200 md:text-base">Profil</a></li>
			<li><a href="/berita" class="hover:text-blue-200 md:text-base">Berita</a></li>
			<li><a href="#" class="hover:text-blue-200 md:text-base">Pengumuman</a></li>
			<li><a href="#" class="hover:text-blue-200 md:text-base">Madrasah</a></li>
			<li><a href="/tentang" class="hover:text-blue-200 md:text-base">Tentang Kami</a></li>
		</ul>
	</div>
</nav>

<style>
	/* Mengurangi ukuran font untuk tampilan mobile */
	
</style>

<script>
	document.getElementById('toggle-menu').addEventListener('click', function() {
		const mobileMenu = document.getElementById('mobile-menu');

		if (mobileMenu.classList.contains('hidden')) {
			// Buka menu: hapus class 'hidden', set maxHeight ke tinggi konten
			mobileMenu.classList.remove('hidden');
			mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
		} else {
			// Tutup menu: set maxHeight ke 0 dan tambahkan class 'hidden' setelah transisi selesai
			mobileMenu.style.maxHeight = '0';

			// Event listener untuk menunggu transisi selesai
			mobileMenu.addEventListener('transitionend', function handleTransitionEnd() {
				mobileMenu.classList.add('hidden');
				mobileMenu.removeEventListener('transitionend',
				handleTransitionEnd); // Hapus listener untuk performa
			}, {
				once: true
			});
		}
	});
</script>
