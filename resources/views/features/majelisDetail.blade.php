@extends('layouts.main')
@section('title', 'Detail Majelis')

@section('content')

	@php
		$majelisList = [
		    [
		        'nama' => 'Majelis Taklim Al-Ikhlas',
		        'deskripsi' => 'Majelis ini membahas kajian keagamaan secara mendalam setiap minggu.',
		        'visi' => 'Menciptakan lingkungan yang penuh dengan cahaya dzikir dan keimanan.',
		        'misi' => 
		            'Mengadakan dzikir bersama setiap bulan, Menyebarkan ajaran Islam melalui kegiatan dzikir,Menguatkan hubungan spiritual dengan Allah SWT.',
		        
		    ],
		];
	@endphp

	@foreach ($majelisList as $majelis)
		<div class="justify-center">
			<div class="mx-auto w-full mb-     max-w-4xl items-center gap-5 px-5 pt-40 sm:px-6 lg:px-8">
				<nav class="mb-4 text-sm text-gray-600">
					<a href="{{ url('/') }}" class="hover:text-blue-500">Beranda</a>
					<span class="mx-2">/</span>
					<a href="{{ url('/majelis') }}" class="hover:text-blue-500">Majelis</a>
					<span class="mx-2">/</span>
					<span class="text-gray-700">{{ $majelis['nama'] }}</span>
				</nav>

				{{-- Card Konten --}}
				<div class="rounded-lg bg-white p-5 drop-shadow">
					<div class="pb-3 text-left text-2xl font-bold text-primary">{{ $majelis['nama'] }}</div>

					{{-- Deskripsi Majelis --}}
					<div class="mb-4 text-justify text-sm text-[#7b7b7b]">
						Majelis ini bertanggung jawab atas kegiatan sosial dan keagamaan di Pimpinan Daerah Muhammadiyah Kabupaten Pinrang.
						Tujuan utamanya adalah untuk mengkoordinasikan dan melaksanakan program-program yang telah direncanakan, serta
						mendukung kegiatan umat di wilayah tersebut.
					</div>
					{{-- visi --}}
					<div class="mt-6">
						<div class="mb-2 text-lg font-bold text-[#414141]">Visi</div>
						<div class="mb-4 text-justify text-sm text-[#7b7b7b]">
							{{ $majelis['visi'] }} </div>
						<div class="mb-2 text-lg font-bold text-[#414141]">Misi</div>
						<div class="mb-4 text-justify text-sm text-[#7b7b7b]">
							{{ $majelis['misi'] }} </div>



						{{-- Struktur Kepengurusan --}}
						<div class="mt-6">
							<div class="mb-2 text-lg font-bold text-[#414141]">Struktur Kepengurusan</div>
							<div class="flex flex-col gap-2 text-sm text-[#7b7b7b]">
								<div><span class="font-bold">Ketua:</span> Dr. Ahmad</div>
								<div><span class="font-bold">Sekretaris:</span> H. Zainal Arifin</div>
								<div><span class="font-bold">Bendahara:</span> Hj. Aisyah</div>
							</div>
						</div>

						{{-- Kontak --}}
						<div class="mt-6">
							<div class="mb-2 text-lg font-bold text-[#414141]">Kontak Majelis</div>
							<div class="text-sm text-[#7b7b7b]">
								Jika Anda memiliki pertanyaan atau ingin berpartisipasi dalam kegiatan, silakan hubungi kami melalui email: <span
									class="text-[#064dac]">majelis@example.com</span>
							</div>
						</div>
					</div>
				</div>
			</div>
	@endforeach

@endsection
