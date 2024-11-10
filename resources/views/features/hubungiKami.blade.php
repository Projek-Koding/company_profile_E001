@extends('layouts.main')
@section('title', 'Hubungi Kami')

@section('content')
    @include('components.navbar')
    {{-- atur font dan center --}}
    <div class="justify-center font-['Poppins']">

        {{-- atur agar tengah dan ada space kanan kiri --}}
        <div class="px-5 py-44 gap-5 w-full items-center max-w-5xl mx-auto sm:px-6 lg:py-44 lg:px-8">

            {{-- Hubungi Kami --}}
            <div class="flex-col gap-3 flex justify-start max-w-full mx-auto rounded-lg overflow-hidden">
                <div class="self-stretch text-[#064dac] text-2xl font-bold">Hubungi Kami</div>
                <div class="self-stretch h-[0px] border border-[#e1e1e1]"></div>
                <div class="self-stretch text-[#353535] text-sm font-normal  ">
                    Pimpinan Daerah Muhammadiyah Kabupaten Pinrang dapat dihubungi melalui kontak berikut
                </div>
            </div>


            <div class="mt-16 lg:mt-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="rounded-lg overflow-hidden flex-col gap-3 flex">

                        {{-- section peta --}}
                        <div class="self-stretch text-[#414141] text-lg font-bold ">lokasi kami</div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.099652564885!2d119.65012377455274!3d-3.7884567961853914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d944d6b05eaa8f1%3A0xe9ea325a765c824e!2sPusat%20Dakwah%20Muhammadiyah%20Kabupaten%20Pinrang!5e0!3m2!1sen!2sid!4v1731248988254!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    {{-- secion alamat dan kontak --}}
                    <div class="flex-col gap-5 flex">

                        {{-- alamat --}}
                        <div
                            class="self-stretch p-5 bg-white rounded-lg drop-shadow flex-col justify-start items-start gap-3 flex">
                            <div class="self-stretch font-bold">Alamat
                            </div>
                            <div class="self-stretch h-[0px] border border-[#e1e1e1]"></div>
                            <div class="self-stretch font-normal text-[#414141]">Jl. Poros Pinrang - Parepare, Sawito, Kec.
                                Watang
                                Sawitto, Kabupaten Pinrang, Sulawesi Selatan 91211</div>
                        </div>

                        {{-- kontak --}}
                        <div
                            class="self-stretch p-5 bg-white  rounded-lg drop-shadow flex-col justify-start items-start gap-3 flex">
                            <div class="self-stretch font-bold">Kontak Kami
                            </div>
                            <div class="self-stretch h-[0px] border border-[#e1e1e1]"></div>
                            <div class="self-stretch font-normal text-[#414141]">email: muhammadiyahpinrang1@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
