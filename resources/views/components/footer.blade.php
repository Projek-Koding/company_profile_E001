<!-- Footer -->
<footer class="w-full bg-primary text-gray-300">
    <div class="w-10/12 mx-auto mt-2 grid grid-cols-1 justify-around gap-8 py-10 max-md:px-7 md:grid-cols-4">

       
        <!-- Logo Organisasi -->
        <div class="mx-autojustify-center md:justify-start">
            <a href="#"><img src="{{ asset('img/muhammadiyah-putih.png') }}"alt="Deskripsi Gambar"
                    class="mb-2 h-56 w-full object-contain max-md:h-28"></a>

        </div>
        <!-- Informasi Kontak -->
        <div class="text-start max-md:text-center text-white">
            <h1 class="mb-2 text-start text-xl text-white font-bold max-md:text-center max-md:text-xl">
                Pimpinan Daerah Muhammadiyah <br>
                <span class="max-md:text-md  font-semibold md:text-base">Kab. Pinrang</span>
            </h1>
            {{-- <p class="mb-2 text-sm">Jl. Kemerdekaan No. 123, Pinrang, Sulawesi Selatan, Indonesia</p>
        </div>
        <!-- Informasi Kontak -->
        <div class="text-start max-md:text-center text-white">
            <h1 class="mb-2 text-start text-xl text-white font-bold max-md:text-center max-md:text-xl">
                Pimpinan Daerah Muhammadiyah <br>
                <span class="max-md:text-md  font-semibold md:text-base">Kab. Pinrang</span>
            </h1>
            {{-- <p class="mb-2 text-sm">Jl. Kemerdekaan No. 123, Pinrang, Sulawesi Selatan, Indonesia</p>
			<p class="mb-2 text-sm">Telp: (0411) 1234-5678</p> --}}
            <p class="text-sm">Jalan Sultan Hasanuddin, Kec. Watang Sawitto, Kab. Pinrang</p>
        </div>

        <!-- Link Cepat -->
        <div class="text-start max-md:text-center">
            <h2 class="mb-4 text-lg font-semibold text-white max-md:text-center">Akses Cepat</h2>
            <ul class="space-y-2 text-white">
                <li><a href="{{ route('beranda') }}" class="hover:text-blue-400 hover:underline">Beranda</a></li>
                <li><a href="{{ route('profil') }}" class="hover:text-blue-400 hover:underline">Profil</a></li>
                <li><a href="{{ route('berita') }}" class="hover:text-blue-400 hover:underline">Berita</a></li>
                <li><a href="{{ route('pengumuman') }}" class="hover:text-blue-400 hover:underline">Pengumuman</a></li>
                <li><a href="{{ route('majelis') }}" class="hover:text-blue-400 hover:underline">Majelis</a></li>
            </ul>
        </div>

        <!-- Media Sosial -->
        <div class="text-start max-md:text-center">
            <h2 class="mb-2 text-lg font-semibold text-white max-md:mb-2">Ikuti Kami</h2>
            <div class="space-x-4 text-start max-md:text-center">
                <a href="#" aria-label="Facebook" class=" text-2xl text-gray-300 hover:text-blue-500">
                    <i class="fab fa-facebook-f  h-6 w-6"></i>
                </a>
                {{-- <a href="#" aria-label="Twitter" class="text-2xl text-gray-300 hover:text-blue-400">
                    <i class="fab fa-twitter h-6 w-6"></i>
                </a> --}}
                <a href="#" aria-label="Instagram" class="text-2xl text-gray-300 hover:text-pink-500">
                    <i class="fab fa-instagram h-6 w-6"></i>
                </a>
            </div>
        </div>

    </div>
    <div class="container-fluid py-2 mx-auto mt-8 w-full  text-center text-xs bg-primary">
        <p class="text-xs text-gray-400">
            &copy; 2024 Pimpinan Daerah Muhammadiyah Kabupaten Pinrang.
            <a href="{{ route('syarat-dan-ketentuan') }}" class="text-white hover:underline">Syarat dan Ketentuan</a>
        </p>
    </div>


    <!-- Copyright -->
    <!-- Copyright -->

</footer>
