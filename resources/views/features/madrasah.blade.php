@extends('layouts.main')
@section('title', 'Madrasah')

@section('content')
    <div class="min-h-screen py-20 pt-32 w-11/12 px-20 text-primary font-semibold ">
        @for ($i = 0; $i < 20; $i++)
            <p>{{ $i + 1 . '. ' }}Madrasah {{ $i }}</p>
        @endfor
    </div>
@endsection
