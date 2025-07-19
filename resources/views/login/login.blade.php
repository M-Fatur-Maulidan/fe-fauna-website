@extends('base')

@section('content')
    {{-- Wadah utama yang menutupi seluruh layar dan menggunakan gambar sebagai background --}}
    <div class="relative w-screen h-screen bg-cover bg-center" style="background-image: url('{{ asset('image/fauna/singa_1.jpg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50 d-flex flex-col justify-items-end items-center w-full h-full">
            {{-- Konten di dalam wadah utama, seperti form login --}}
            <div class="bg-slate-950 opacity-75 w-1/2 h-full"></div>
        </div>
    </div>
@endsection
