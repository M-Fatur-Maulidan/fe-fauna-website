@extends('layouts.portal')

@section('content')

<section class="bg-gray-800 text-white py-20">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl md:text-5xl font-bold">Galeri Dunia Satwa</h1>
        <p class="text-lg text-gray-300 mt-4 max-w-3xl mx-auto">
            Abadikan momen-momen menakjubkan dari kehidupan liar melalui koleksi foto pilihan kami.
        </p>
    </div>
</section>

<section class="py-20 bg-gray-100">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

            @foreach ($items as $item)
            {{-- Gambar Galeri --}}
            <div class="relative overflow-hidden rounded-lg group">
                <a href="{{ route('gallery.detail', ['id' => $item['id']]) }}">
                    <img src="{{ $item['gambar_url'] }}" alt="{{ $item['nama_umum'] }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-opacity-0 group-hover:bg-opacity-40 transition-opacity duration-300 flex items-end p-4">
                        <h3 class="text-white text-lg font-bold opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                            {{ $item['nama_umum'] }}
                        </h3>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-12 text-gray-800">Jelajahi Berdasarkan Kategori</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <a href="#" class="relative h-64 rounded-lg overflow-hidden group shadow-lg">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-110" style="background-image: url('https://images.unsplash.com/photo-1456926631375-92c8ce872def?q=80&w=2070')"></div>
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <h3 class="text-white text-2xl font-bold">Mamalia</h3>
                </div>
            </a>
            <a href="#" class="relative h-64 rounded-lg overflow-hidden group shadow-lg">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-110" style="background-image: url('https://images.unsplash.com/photo-1486365227551-f3f90034a57c?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')"></div>
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <h3 class="text-white text-2xl font-bold">Burung</h3>
                </div>
            </a>
            <a href="#" class="relative h-64 rounded-lg overflow-hidden group shadow-lg">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-110" style="background-image: url('https://images.unsplash.com/photo-1437622368342-7a3d73a34c8f?q=80&w=1228&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')"></div>
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <h3 class="text-white text-2xl font-bold">Amfibi</h3>
                </div>
            </a>
        </div>
    </div>
</section>

@endsection