@extends('layouts.main')
@section('title', 'Profil')

@section('content')

    <!-- Konten Profil -->
    <div class="mx-auto w-full overflow-hidden lg:px-12">
        <div class="container mx-auto mt-0 flex min-h-screen flex-col justify-center text-center max-md:px-7">
            <h1 class="mb-2 text-5xl font-bold text-primary max-md:text-3xl">Profil</h1>
            <p class="text-primary">Untuk mengenal Pimpnan Daerah Muhammadiah Pinrang Lebih Dalam</p>
        </div>

        {{-- about us --}}
        <div class="px-5 py-32 gap-5 w-full items-center max-w-5xl mx-auto sm:px-6 lg:py-32 lg:px-8">
            {{-- <div class="text-center text-[#064dac] text-2xl font-bold pb-3">Tentang Kami</div> --}}
            <div
                class="self-stretch p-5 border border-gray-300 bg-white rounded-lg drop-shadow flex-col justify-start items-start gap-3 flex text-center">
                <div class="self-stretch text-primary text-lg font-bold  leading-7">Sejarah
                    Terbentuknya Pimpinan Daerah Muhammadiyah Kab. Pinrang</div>
                <div class="self-stretch h-[0px] border border-[#e1e1e1]"></div>
                <div class="self-stretch text-[#353535] text-sm font-normal  ">
                    Muhammadiyah di Kab. Pinrang terbentuk pada 18 November 1928 dengan ketua pertama Muhammadiyah
                    di
                    Kab. Pinrang yaitu <br> H. Abdul Fattah
                </div>
            </div>
        </div>
        <!-- Konten Visi dan Misi -->
        <div
            class="w-full mx-auto mb-0 mt-0 gap-10 text-center max-lg:w-10/12 max-lg:px-4 max-lg:py-8 max-md:gap-y-10 lg:w-11/12">

            <!-- Kontainer Visi -->
            <div class="w-11/12 mx-auto flex duration-300 hover:scale-105 max-md:max-h-full max-md:w-full max-md:flex-col">
                <!-- Bagian Judul Visi -->
                <div
                    class="flex w-2/5 items-center justify-center bg-primary transition-transform duration-300 hover:scale-105 max-md:h-20 max-md:w-full">
                    <h1 class="text-7xl font-bold text-white max-md:text-3xl">Visi</h1>
                </div>

                <!-- Kontainer Deskripsi Visi -->
                <div
                    class="flex w-3/5 items-center justify-center border-2 border-primary px-5 py-12 shadow-md transition-transform duration-300 hover:scale-105 max-md:w-full max-md:px-8 max-md:py-4">
                    <h1 class="text-md text-justify font-medium text-primary max-md:text-sm lg:px-12">
                        Muhammadiyah sebagai gerakan Islam yang berlandaskan Al-Qur’an dan As-Sunnah dengan watak tajdid
                        yang dimilikinya
                        senantiasa istiqomah dan aktif dalam melaksanakan dakwah Islam amar ma’ruf nahi munkar di semua
                        bidang dalam upaya
                        mewujudkan Islam sebagai rahmatan lil’ alamin menuju terciptanya/ terwujudnya masyarakat Islam yang
                        sebenar-benarnya.
                    </h1>
                </div>
            </div>

        </div>

        <!-- Kontainer Misi -->
        <div
            class="w-11/12 mx-auto mt-5 flex flex-row-reverse duration-300 hover:scale-105 max-md:max-h-full max-md:w-full max-md:flex-col">

            <!-- Bagian Judul Misi (Desktop di sebelah kanan) -->
            <div
                class="flex w-2/5 items-center justify-center bg-primary transition-transform duration-300 hover:scale-105 max-md:order-1 max-md:h-20 max-md:w-full">
                <h1 class="text-7xl font-bold text-white max-md:text-3xl">Misi</h1>
            </div>
            <!-- Bagian Judul Misi (Desktop di sebelah kanan) -->




            <!-- Kontainer Deskripsi Misi -->
            <div
                class="flex w-3/5 items-center justify-start border-2 border-primary px-5 py-12 shadow-md transition-transform duration-300 hover:scale-105 max-md:w-full max-md:px-8 max-md:py-4">
                <h1 class="text-md text-justify font-medium text-primary max-md:text-sm lg:px-12">
                    Misi Muhammadiyah sebagai gerakan Islam, dakwah amar ma’ruf nahi munkar memiliki misi:
                    Menegakkan keyakinan tauhid yang murni sesuai dengan ajaran Allah SWT yang dibawa oleh para Rasul
                    sejak Nabi Adam
                    AS hingga Nabi Muhammad SAW.
                    Menggunakan akal fikiran sesuai dengan jiwa ajaran Islam untuk menjawab dan menyelesaikan
                    persoalan-persoalan
                    kehidupan.
                    Menyebarluaskan ajaran Islam yang bersumber pada Al-Qur’an dan Sunnah Rasul untuk pedoman hidup umat
                    manusia.
                    Mewujudkan amalan-amalan Islam dalam kehidupan pribadi, keluarga, dan masyarakat.
                </h1>
            </div>

        </div>
    </div>
    </div>
    </div>



    <!-- Konten Struktur Organisasi -->
    <div
        class="container mx-auto flex min-h-screen flex-col items-center justify-center my-10 py-3 max-md:w-10/12 lg:w-11/12">
        <h2 class="mb-10 text-center text-5xl font-bold text-primary max-md:text-3xl">Struktur Organisasi</h2>
        <!-- Kontainer Anggota Tim -->
        <div
            class="container mx-auto  flex flex-wrap justify-center gap-8 max-md:mx-3 max-md:grid max-md:grid-cols-2 max-md:grid-rows-2 max-md:gap-2">
            <!-- Anggota Tim 1 -->
            <div class="flex w-64 rounded-sm flex-col items-center bg-primary p-6 max-md:w-fit">
                <img src="{{ asset('img/ketua PDM.jpg') }}" alt="Ketua PDM"
                    class="mb-4 h-28 w-28 rounded-full object-cover">
                <h3 class="max-md:text-md text-md text-center font-semibold text-white">Andi Syamiluddin,
                    S.Pd.,M.Pd. I
                </h3>
                <p class="text-center text-xs text-white max-md:text-sm">Ketua Pimpinan Daerah Muhammadiyah</p>
            </div>
            <!-- Anggota Tim 2 -->
            <div class="flex rounded-sm  w-64 flex-col items-center bg-primary p-6 max-md:w-fit">
                <img src="{{ asset('img/Sekretaris-PDM.jpg') }}" alt="Nama Anggota 2"
                    class="mb-4 h-28 w-28 rounded-full object-cover">
                <h3 class="max-md:text-md text-md text-center font-semibold text-white">Syaifuddin, SH., S.Pd., M.Pd
                </h3>
                <p class="text-center text-xs text-white max-md:text-sm">Sekretaris Pimpinan Daerah Muhammadiyah</p>
            </div>

            <!-- Anggota Tim 3 -->
            <div class="flex w-64 rounded-sm  flex-col items-center bg-primary p-6 max-md:w-fit">
                <img src="{{ asset('img/Kepala Disdakmen.jpg') }}" alt="Nama Anggota 3"
                    class="mb-4 h-28 w-28 rounded-full object-cover">
                <h3 class="max-md:text-md text-md text-center font-semibold text-white">Muh. Abrar Usman, S. Pd.M.Pd
                </h3>
                <p class="text-center text-xs text-white max-md:text-sm">Ketua Majelis Pendidikan Dasar Menengah
                    Kab.
                    Pinrang</p>
            </div>

            <!-- Anggota Tim 4 -->
            <div class="flex w-64 flex-col rounded-sm  items-center bg-primary p-6 max-md:w-fit">
                <img src="{{ asset('img/Sekretaris Disdakmen.jpg') }}" alt="Nama Anggota 4"
                    class="mb-4 h-28 w-28 rounded-full object-cover">
                <h3 class="max-md:text-md text-md text-center font-semibold text-white">Masnur, S. Pd. M. Pd</h3>
                <p class="text-center text-xs text-white max-md:text-sm">Sekretaris Majelis Pendidikan Dasar
                    Menengah
                    Kab. Pinrang
                </p>
            </div>

        </div>
    </div>
    @include('components/backToTopBtn')
    </div>




@endsection
