@extends('layouts.main')

@section('title', 'Detail Majelis')

@section('content')
	@php
		// Data Majelis
		$majelisDetail = [
		    'nama' => 'Pendidikan Dasar Menengah dan Pendidikan Nonformal',
		    'ketua' => 'Ust. Ahmad Zain',
		    'wakil_ketua' => 'Ust. Budi Rahman',
		    'sekretaris' => 'Hj. Siti Nurhasanah',
		    'anggota' => [
		        'Ali Muhsin',
		        'Fatimah Zahra',
		        'Musa Kamal',
		        'Aisyah Syafira',
		        'Ridwan Fikri',
		        'Rahmawati Hasan',
		        'Yusuf Abdullah',
		    ],
		];
	@endphp

	<div class="max-w-3xl max-sm:px-6 mx-auto mb-10 px-4 pt-40 font-main">
		<h1 class="mb-10 text-center  text-4xl max-sm:text-2xl font-bold text-primary">{{ $majelisDetail['nama'] }}</h1>

		<div class="mx-auto max-w-3xl rounded-lg bg-white p-6 shadow-lg ring-1 ring-gray-200">
			<!-- Informasi Utama -->
			<div class="mb-8">
				<h2 class="mb-4 text-2xl max-sm:text-xl font-semibold text-gray-800">Informasi Majelis</h2>
				<ul class="space-y-3 text-lg max-sm:text-sm">
					<li><strong>Ketua:</strong> <span class="text-gray-600">{{ $majelisDetail['ketua'] }}</span></li>
					<li><strong>Wakil Ketua:</strong> <span class="text-gray-600">{{ $majelisDetail['wakil_ketua'] }}</span></li>
					<li><strong>Sekretaris:</strong> <span class="text-gray-600">{{ $majelisDetail['sekretaris'] }}</span></li>
				</ul>
			</div>

			<!-- Daftar Anggota -->
			<div>
				<h2 class="mb-4 text-2xl max-sm:text-sm font-semibold text-gray-800">Daftar Anggota</h2>
				<div class="rounded-lg bg-[#f5f8fc] p-4 shadow-inner">
					<ul class="list-inside list-decimal space-y-2 max-sm:text-sm">
						@foreach ($majelisDetail['anggota'] as $index => $anggota)
							<li class="text-gray-700">{{ $anggota }}</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection
