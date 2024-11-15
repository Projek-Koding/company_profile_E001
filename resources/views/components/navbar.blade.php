<nav class="fixed z-20 w-full bg-primary py-2 text-white shadow">
    <div class="mx-auto flex w-10/12 max-sm:w-11/12 items-center justify-between px-6 ">
        <div class="flex items-center space-x-4">
            <a href="/"><img src="{{ asset('img/muhammadiyah-putih.png') }}"alt="Deskripsi Gambar"
                    class="h-20 w-full object-contain max-sm:h-28"></a>
            <h1 class="text-start text-xl font-bold max-md:text-lg max-sm:text-center">
                Pimpinan Daerah Muhammadiyah <br>
                <span class="text-sm font-semibold md:text-base">Kab. Pinrang</span>
            </h1>

        </div>
        <div class="flex flex-row">
            <ul class="hidden gap-2 rounded-sm text-white md:flex md:items-end">
                <li class="duration-300 hover:scale-105"><a href="{{ route('beranda') }}"
                        class="navbar-menu nav-link {{ Route::is('beranda') ? 'active' : '' }}">Beranda</a></li>
                <li class="duration-300 hover:scale-105"><a href="{{ route('profil') }}"
                        class="navbar-menu nav-link {{ Route::is('profil') ? 'active' : '' }} rounded-sm">Profil</a>
                </li>
                <li class="duration-300 hover:scale-105"><a href="{{ route('berita') }}"
                        class="navbar-menu nav-link {{ Route::is('berita') || Route::is('berita-detail') ? 'active' : '' }} rounded-sm">Berita</a>
                </li>
                <li class="duration-300 hover:scale-105"><a href="{{ route('pengumuman') }}"
                        class="navbar-menu nav-link {{ Route::is('pengumuman') || Route::is('pengumuman-detail') ? 'active' : '' }} rounded-sm">Pengumuman</a>
                </li>
                <li class="duration-300 hover:scale-105"><a href="{{ route('majelis') }}"
                        class="navbar-menu nav-link {{ Route::is('majelis') || Route::is('majelisDetail') ? 'active' : '' }} rounded-sm">Majelis</a>
                </li>

            </ul>
        </div>

        <button class="ms-3 block md:hidden" id="toggle-menu" aria-expanded="false" aria-controls="mobile-menu">
            <!-- Icon Menu -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

    </div>
    </div>
    <div class=" mx-auto px-7 md:hidden">
        <ul class="pb-3 pt-3 hidden max-h-0 space-y-2 overflow-hidden text-sm transition-all duration-300 ease-out"
            id="mobile-menu">
            <li><a href="{{ route('beranda') }}" class="hover:text-blue-200 md:text-base">Beranda</a></li>
            <li><a href="{{ route('profil') }}" class="hover:text-blue-200 md:text-base">Profil</a></li>
            <li><a href="{{ route('berita') }}" class="hover:text-blue-200 md:text-base">Berita</a></li>
            <li><a href="{{ route('pengumuman') }}" class="hover:text-blue-200 md:text-base">Pengumuman</a></li>
            <li><a href="{{ route('majelis') }}" class="hover:text-blue-200 md:text-base">Majelis</a></li>

        </ul>
    </div>
</nav>


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
