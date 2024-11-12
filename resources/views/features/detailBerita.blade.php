@extends('layouts.main')

@section('content')
    {{-- @php
     $berita = [
        'id' => 1,
        'judul' => 'Contoh Judul Berita',
        'tanggal_diperbarui' => '11 November 2024',
        'penulis' => 'Firman aja',
        'gambar' => 'https://awsimages.detik.net.id/community/media/visual/2022/07/13/ilustrasi-baca-berita_169.jpeg?w=1200',
        'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos voluptates eveniet nam animi, eius fugiat quis id sequi vitae molestiae atque magnam sint totam similique! Magnam ab dolor doloribus dignissimos?Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus voluptatibus odio et quidem perspiciatis eligendi at suscipit nostrum sit. Ad molestiae nihil mollitia. Sapiente dolores in accusamus veritatis dicta quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nesciunt mollitia quae dolorem, deserunt accusantium, provident pariatur quibusdam veritatis officiis numquam quidem sunt deleniti officia eum dolore explicabo id minima. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae, mollitia. Repellendus quibusdam quas quisquam illum quam natus sint doloribus quaerat excepturi! Sunt reprehenderit repellendus incidunt, repudiandae iste quis facilis expedita.
         Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos voluptates eveniet nam animi, eius fugiat quis id sequi vitae molestiae atque magnam sint totam similique! Magnam ab dolor doloribus dignissimos?Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus voluptatibus odio et quidem perspiciatis eligendi at suscipit nostrum sit. Ad molestiae nihil mollitia. Sapiente dolores in accusamus veritatis dicta quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nesciunt mollitia quae dolorem, deserunt accusantium, provident pariatur quibusdam veritatis officiis numquam quidem sunt deleniti officia eum dolore explicabo id minima. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae, mollitia. Repellendus quibusdam quas quisquam illum quam natus sint doloribus quaerat excepturi! Sunt reprehenderit repellendus incidunt, repudiandae iste quis facilis expedita.'
        ,
    ];

    // Data berita lainnya
    $beritaLainnya = [
        [
            'id' => 1,
            'judul' => 'Berita Terkait 1',
            'tanggal' => '10 November 2024',
            
            'gambar' => 'https://bbpmpsulsel.kemdikbud.go.id/assets/images/3afdf8eed4c601ca8ac8e4445194cf36.jpeg',
        ],
        [
            'id' => 2,
            'judul' => 'Berita Terkait 2',
            'tanggal' => '9 November 2024',
            'gambar' => 'https://bbpmpsulsel.kemdikbud.go.id/assets/images/3afdf8eed4c601ca8ac8e4445194cf36.jpeg',
        ],
        [
            'id' => 3,
            'judul' => 'Berita Terkait 3',
            'tanggal' => '8 November 2024',
            'gambar' => 'https://bbpmpsulsel.kemdikbud.go.id/assets/images/3afdf8eed4c601ca8ac8e4445194cf36.jpeg',
        ],
        
    ];

@endphp --}}


    <div class="min-h-screen pt-40 max-lg:pt-44 mx-auto px-4 py-8">
        <div class="mx-auto w-10/12 pl-5 max-lg:pl-0 flex flex-col lg:flex-row gap-8">


            <!-- Kolom Kiri - Detail Berita -->
            <div class="w-full  lg:w-8/12 ">
                <nav class="mb-4 text-sm">
                    <a href="{{ url('/') }}" class="text-primary hover:underline">Beranda</a>
                    <span class="mx-2">/</span>
                    <a href="{{ url('/berita') }}" class="text-primary hover:underline">Berita</a>
                    <span class="mx-2">/</span>
                    <span class="text-gray-700">Detail Berita</span>
                </nav>
                <!-- Judul Berita -->
                <h1 class="mb-4 text-3xl font-bold">{{ $berita->judul }}</h1>

                <!-- Terakhir Diperbarui -->
                <p class="mb-4 text-gray-500 text-sm">Terakhir diperbarui: {{ $berita->updated_at }}, oleh:
                    {{ $berita->penulis }}.</p>


                <!-- Gambar Berita -->
                <img src="{{ asset('/storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                    class="mb-6 w-full rounded-lg object-cover shadow-md">

                <!-- Deskripsi Berita -->
                <div class="mb-8 text-justify text-gray-700">
                    <p>{!! str($berita->isi_berita)->sanitizeHtml() !!}</p>
                </div>
            </div>

            <!-- Kolom Kanan - Berita Lainnya -->
            <div class="w-full lg:w-4/12 lg:pt-12">
                <h2 class="mb-4 text-2xl font-semibold">Berita Lainnya</h2>
                <div class="grid gap-6">
                    @foreach ($beritaLainnya as $berita)
                        <div
                            class="group relative transform rounded-xl bg-white text-primary shadow-md transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                            <img src="{{ asset('/storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                                class="h-48 w-full rounded-t-xl object-cover">
                            <div class="p-5">
                                <p class="mb-1 w-max text-xs font-medium text-gray-500">{{ $berita->created_at }}</p>

                                <h3
                                    class="line-clamp-2 text-lg font-medium transition-colors duration-300 hover:underline group-hover:text-yellow-400">
                                    <a href="{{ url('/berita/' . $berita->slug) }}">{{ $berita->judul }}</a>
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
