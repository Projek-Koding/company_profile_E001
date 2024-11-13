@extends('layouts.main')
@section('title', 'Majelis')

@section('content')
	@php
		$majelisList = [
		    ['nama' => 'Pendidikan Dasar Menengah dan Pendidikan Nonformal'],
		    ['nama' => 'Lembaga Pengembang Usaha Mikro Kecil Menengah'],
		    ['nama' => 'Nama Majelis'],
		    ['nama' => 'Nama Majelis'],
		];
	@endphp

	<div class="container mx-auto px-4 max-sm:px-6 py-8 pt-40 font-main">
		<h1 class="mb-8 text-center text-4xl max-sm:text-2xl font-bold text-[#064dac]">Daftar Majelis</h1>

		<div class="mx-auto max-w-3xl rounded-lg bg-white p-6 shadow-lg ring-1 ring-gray-200">
			<ul class="divide-y divide-gray-200">
				@foreach ($majelisList as $index => $majelis)
					<li class="flex items-center py-4">
						<span class="flex h-10 w-10 max-sm:w-8 max-sm:h-8 items-center justify-center rounded-full bg-primary text-white font-semibold">
							{{ $loop->iteration }}
						</span>
						<a href="#"
						   class="ml-4 text-lg  max-sm:text-sm font-medium text-gray-800 hover:text-[#064dac] hover:underline transition">
							{{ $majelis['nama'] }}
						</a>
					</li>
				@endforeach
			</ul>
		</div>
	</div>
@endsection
