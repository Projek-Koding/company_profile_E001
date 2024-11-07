<nav class="absolute w-full bg-primary py-5 text-white shadow">
		<div class="container mx-auto flex items-center justify-between max-md:px-7">
				<div class="flex items-center space-x-4">
						<a href="#" class="font-poppins logo text-xl font-bold">Logo</a> <!-- Tambahkan class logo -->
						<ul class="font-poppins hidden space-x-4 md:flex">
								<li><a href="#" class="hover:text-blue-200">Beranda</a></li>
								<li><a href="#" class="hover:text-blue-200">Profil</a></li>
								<li><a href="#" class="hover:text-blue-200">Berita</a></li>
								<li><a href="#" class="hover:text-blue-200">Sekolah/Madrasah</a></li>
								<li><a href="#" class="hover:text-blue-200">Download</a></li>
						</ul>
				</div>
				<div class="flex-rowb flex">
						<!-- Form Pencarian - Sekarang selalu ditampilkan -->
						<form id="search-form " class="flex transition-all duration-300">
								<input type="text" placeholder="Cari..."
										class="max-h-7 w-32 rounded-full border-2 border-primary bg-white p-2 text-xs text-primary focus:outline-none focus:ring-2 focus:ring-blue-500"
										aria-label="Search">
						</form>
						<button class="ms-3 block md:hidden" id="toggle-menu" aria-expanded="false" aria-controls="mobile-menu">
								<!-- Icon Menu -->
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
										stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
								</svg>
						</button>
						<!-- Icon Pencarian -->
						<button id="search-icon " class="ms-3 hidden hover:text-blue-200 md:block">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
										stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
								</svg>
						</button>
				</div>
		</div>
		<div class="container mx-auto px-7 md:hidden">
				<ul class="font-poppins mt-2 hidden max-h-0 space-y-2 overflow-hidden text-sm transition-all duration-300 ease-out"
						id="mobile-menu">
						<li><a href="#" class="hover:text-blue-200 md:text-base">Beranda</a></li>
						<li><a href="#" class="hover:text-blue-200 md:text-base">Profil</a></li>
						<li><a href="#" class="hover:text-blue-200 md:text-base">Berita</a></li>
						<li><a href="#" class="hover:text-blue-200 md:text-base">Sekolah/Madrasah</a></li>
						<li><a href="#" class="hover:text-blue-200 md:text-base">Download</a></li>
				</ul>
		</div>
</nav>

<style>
		/* Mengurangi ukuran font untuk tampilan mobile */
		@media (max-width: 768px) {
				#search-form input {
						font-size: 0.875rem;
						/* Ukuran font lebih kecil */
				}

				.logo {
						/* Atur ukuran logo pada mode mobile */
						font-size: 1rem;
						/* Mengurangi ukuran logo */
				}
		}

		/* Pastikan body dan html memiliki tinggi layar penuh tanpa overflow */
		html,
		body {
				height: 100%;
				margin: 0;
				/* overflow: hidden; */
		}

		#search-form input::placeholder {
				color: white;
				/* Gunakan !important hanya jika diperlukan */
				opacity: 1;
				/* Menjaga opacity agar placeholder terlihat */
		}
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
								mobileMenu.removeEventListener('transitionend', handleTransitionEnd); // Hapus listener untuk performa
						}, {
								once: true
						});
				}
		});
</script>
