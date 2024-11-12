@extends('layouts.main')
@section('title', 'S&K Web')

@section('content')
    @include('components.navbar')

    {{-- atur font dan center --}}
    <div class="justify-center font-['Poppins']">
        <div class="px-5 py-44 gap-5 w-full items-center max-w-5xl mx-auto sm:px-6 lg:py-44 lg:px-8">

            {{-- about us --}}
            <div class="self-stretch text-[#064dac] text-2xl font-bold pb-3">Syarat dan Ketentuan</div>

            {{-- Sejarah Organisasi --}}
            <div class="flex-col gap-4  flex items-center">

                {{-- Hal-hal yang disediakan website ini: --}}
                <div class="self-stretch p-5 bg-white rounded-lg drop-shadow flex-col justify-start items-start gap-3 flex">
                    <div class="self-stretch text-[#414141] text-lg font-bold  leading-7">Hal-hal yang
                        disediakan website ini</div>
                    <div class="self-stretch h-[0px] border border-[#e1e1e1]"></div>

                    <div class="flex-col gap-2.5 flex text-[#7b7b7b] text-sm">

                        {{-- pengumuman --}}
                        <div class="flex-col gap-1 flex">
                            <div class="self-stretch  font-bold  ">Daftar
                                Pengumuman
                            </div>
                            <div class="text-justify font-normal ">
                                Daftar pengumuman adalah daftar yang bisa dilihat oleh pengguna dan isi dari pengumuman
                                tersebut
                                dibuat oleh Admin yang merupakan Pimpinan Daerah Muhammadiyah Kab. Pinrang.
                                Pengumuman
                                yang dibuat adalah pengumuman yang berkaitan dengan administrasi atau aktivitas Pimpinan
                                Daerah Muhammadiyah Kab. Pinrang.
                            </div>
                        </div>

                        {{-- Berita --}}
                        <div class="flex-col gap-1 flex ">
                            <div class="self-stretch  font-bold  ">Daftar
                                Berita
                            </div>
                            <div class="text-justify font-normal ">
                                Daftar Berita adalah daftar yang bisa dilihat oleh pengguna dan isi dari berita tersebut
                                dibuat oleh Admin yang merupakan Pimpinan Daerah Muhammadiyah Kab. Pinrang. Berita
                                yang dibuat adalah Berita tentang ha-hal yang berkaitan dengan segala aktivitas Pimpinan
                                Daerah Muhammadiyah Kab. Pinrang.. Tujuan Berita ini adalah untuk memberitakan secara
                                up-to-date kegiatan/acara atau
                                peristiwa yang dilakukan oleh Pimpinan Daerah Muhammadiyah Kab. Pinrang..
                            </div>
                        </div>
                    </div>

                </div>


                {{-- Syarat dan Ketentuan: --}}
                <div class="self-stretch p-5 bg-white rounded-lg drop-shadow flex-col justify-start items-start gap-3 flex">
                    <div class="self-stretch text-[#414141] text-lg font-bold  leading-7">Syarat dan
                        Ketentuan Penggunaan Website</div>
                    <div class="self-stretch h-[0px] border border-[#e1e1e1]"></div>

                    {{-- isinya mi ini (penanda aja ini mah) --}}
                    <div class="flex-col gap-2.5 flex text-[#7b7b7b] text-sm">

                        {{-- Inito ini ceritanya --}}
                        <div class="flex-col gap-1 flex text-[#414141]">
                            <div class="self-stretch  font-bold  ">Website Resmi Pimpinan Daerah
                                Muhammadiyah Kabupaten Pinrang
                            </div>
                            <div class="text-justify font-normal ">Website ini dikelola oleh Pimpinan
                                Daerah Muhammadiyah Kabupaten Pinrang (selanjutnya disebut sebagai "kami"). Dengan mengakses
                                dan menggunakan website ini, pengguna dianggap telah membaca, memahami, dan menyetujui
                                syarat dan ketentuan berikut.
                            </div>
                        </div>

                        {{-- 1 --}}
                        <div class="flex-col gap-1 flex ">
                            <div class="self-stretch  font-bold  ">1. Informasi Umum
                            </div>
                            <div class="pl-4 font-normal">
                                <div class="text-justify">
                                    1. Website ini menyediakan informasi terkait kegiatan, pengumuman, berita, dan layanan
                                    lainnya yang berhubungan dengan Pimpinan Daerah Muhammadiyah Kabupaten Pinrang.
                                </div>
                                <div class="text-justify">
                                    2. Seluruh konten yang terdapat dalam website ini bersifat informatif dan dapat berubah
                                    sewaktu-waktu tanpa pemberitahuan sebelumnya
                                </div>
                            </div>
                        </div>

                        {{-- 2 --}}
                        <div class="flex-col gap-1 flex ">
                            <div class="self-stretch  font-bold  ">2. Hak dan Kewajiban Pengguna
                            </div>
                            <div class="pl-4 font-normal">
                                <div class="text-justify">
                                    1. Pengguna diperbolehkan untuk mengakses informasi, berita, dan pengumuman di website
                                    ini
                                    untuk keperluan pribadi, non-komersial.
                                </div>
                                <div class="self-stretch">
                                    2. Pengguna dilarang untuk:
                                    <ul class="pl-4 ">
                                        <li>- Menyalahgunakan informasi yang terdapat di dalam website ini untuk kepentingan
                                            yang
                                            melanggar hukum atau merugikan pihak lain.</li>
                                        <li>- Menyalin, mempublikasikan, atau menyebarluaskan konten website tanpa izin
                                            tertulis
                                            dari pengelola</li>
                                        <li>- Melakukan tindakan yang dapat merusak atau mengganggu fungsi website,
                                            termasuk,
                                            namun tidak terbatas pada, penyebaran virus atau peretasan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        {{-- 3 --}}
                        <div class="flex-col gap-1 flex ">
                            <div class="self-stretch  font-bold  ">3. Hak Cipta dan Kekayaan Intelektual
                            </div>
                            <div class="pl-4 font-normal">
                                <div class="text-justify">
                                    1. Semua konten dalam website ini, termasuk namun tidak terbatas pada teks, gambar,
                                    logo, video, dan desain, dilindungi oleh hak cipta yang dimiliki oleh Pimpinan Daerah
                                    Muhammadiyah Kabupaten Pinrang atau pihak lain yang memberikan izin penggunaan kepada
                                    kami.
                                </div>
                                <div class="text-justify">
                                    2. Pengguna tidak diperbolehkan menggunakan konten website ini tanpa izin tertulis dari
                                    pemilik hak cipta.
                                </div>
                            </div>
                        </div>
                        <span class="text-[#414141]"></span>
                        {{-- 4 --}}
                        <div class="flex-col gap-1 flex ">
                            <div class="self-stretch  font-bold  ">4. Pengumuman dan Berita
                            </div>
                            <div class="pl-4 font-normal">
                                <div class="text-justify">
                                    1. <span class="text-[#414141]">Pengumuman Resmi</span>: Semua pengumuman yang
                                    diterbitkan melalui website ini dianggap
                                    sebagai informasi resmi dari <span class="text-[#414141]">Pimpinan Daerah Muhammadiyah
                                        Kabupaten
                                        Pinrang.</span>
                                </div>
                                <div class="text-justify">
                                    2. <span class="text-[#414141]">Berita dan Artikel</span>: Berita yang dipublikasikan di
                                    website ini ditujukan untuk memberikan informasi terkini seputar kegiatan dan program
                                    yang dijalankan. Pengguna disarankan untuk memeriksa tanggal publikasi untuk memastikan
                                    informasi terbaru.
                                </div>
                            </div>
                        </div>

                        {{-- 5 --}}
                        <div class="flex-col gap-1 flex ">
                            <div class="self-stretch  font-bold  ">5. Tautan ke Situs Eksternal
                            </div>
                            <div class="pl-4 font-normal">
                                <div class="text-justify">
                                    1. Website ini dapat menyertakan tautan ke situs pihak ketiga untuk kemudahan pengguna.
                                    Namun, kami tidak bertanggung jawab atas isi, kebijakan privasi, atau layanan yang
                                    disediakan oleh situs pihak ketiga tersebut.
                                </div>
                                <div class="text-justify">
                                    2. Pengguna disarankan untuk membaca syarat dan ketentuan situs pihak ketiga sebelum
                                    menggunakan layanan mereka.
                                </div>
                            </div>
                        </div>

                        {{-- 6 --}}
                        <div class="flex-col gap-1 flex ">
                            <div class="self-stretch  font-bold  ">6. Pembatasan Tanggung Jawab
                            </div>
                            <div class="pl-4 font-normal">
                                <div class="text-justify">
                                    Kami tidak bertanggung jawab atas kerugian atau kerusakan yang timbul akibat
                                    penggunaan atau ketidakmampuan pengguna dalam mengakses website ini.
                                </div>
                            </div>
                        </div>

                        {{-- 7 --}}
                        <div class="flex-col gap-1 flex ">
                            <div class="self-stretch  font-bold  ">7. Privasi Pengguna
                            </div>
                            <div class="pl-4 font-normal">
                                <div class="text-justify">
                                    1. Kami menghormati privasi pengguna dan berkomitmen untuk melindungi data pribadi yang
                                    mungkin dikumpulkan melalui fitur tertentu di website.
                                </div>
                                <div class="text-justify">
                                    2. Data pengguna tidak akan dibagikan kepada pihak ketiga tanpa persetujuan, kecuali
                                    jika diwajibkan oleh hukum.
                                </div>
                            </div>
                        </div>

                        {{-- 8 --}}
                        <div class="flex-col gap-1 flex ">
                            <div class="self-stretch  font-bold  ">8. Perubahan Syarat dan Ketentuan
                            </div>
                            <div class="pl-4 font-normal">
                                <div class="text-justify">
                                    1. Kami berhak untuk mengubah syarat dan ketentuan ini kapan saja tanpa pemberitahuan
                                    sebelumnya.
                                </div>
                                <div class="text-justify">
                                    2. Setiap perubahan akan berlaku setelah diperbarui di halaman ini. Pengguna diimbau
                                    untuk memeriksa halaman ini secara berkala.
                                </div>
                            </div>
                        </div>

                        {{-- 9 --}}
                        <div class="flex-col gap-1 flex ">
                            <div class="self-stretch font-bold  ">9. Hukum yang Berlaku
                            </div>
                            <div class="pl-4 font-normal">
                                <div class="text-justify">
                                    1. Syarat dan ketentuan ini tunduk pada hukum Republik Indonesia.
                                </div>
                                <div class="text-justify">
                                    2. Setiap perselisihan yang timbul terkait penggunaan website ini akan diselesaikan
                                    melalui musyawarah mufakat. Jika tidak tercapai, maka akan diselesaikan sesuai dengan
                                    yurisdiksi yang berlaku di wilayah Kabupaten Pinrang.
                                </div>
                            </div>
                        </div>

                        {{-- akhir kata --}}
                        <div class="self-stretch h-[0px] border border-[#e1e1e1]"></div>
                        <div class="flex-col gap-1 flex ">
                            <div class="text-justify font-bold">Jika Anda memiliki pertanyaan lebih lanjut, silakan
                                menghubungi kami melalui kontak resmi yang tercantum di website ini.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


@endsection
