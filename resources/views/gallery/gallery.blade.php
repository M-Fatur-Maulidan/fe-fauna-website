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
            @php
                // Contoh data gambar. Di aplikasi nyata, ini akan datang dari database.
                $images = [
                    ['url' => 'https://images.unsplash.com/photo-1557050543-4d5f4e07ef46?q=80&w=1932', 'alt' => 'Gajah'],
                    ['url' => 'https://images.unsplash.com/photo-1602491453631-e2a5ad90a131?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'alt' => 'Macan'],
                    ['url' => 'https://images.unsplash.com/photo-1564349683136-77e08dba1ef7?q=80&w=2072', 'alt' => 'Panda'],
                    ['url' => 'https://images.unsplash.com/photo-1557008075-7f2c5efa4cfd?q=80&w=697&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'alt' => 'Rubah'],
                    ['url' => 'https://images.unsplash.com/photo-1486365227551-f3f90034a57c?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'alt' => 'Raja-udang Erasia'],
                    ['url' => 'https://images.unsplash.com/photo-1733545913476-e30285b182fd?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'alt' => 'Katak'],
                    ['url' => 'https://images.unsplash.com/photo-1611364059088-aa3f4b2523cb?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'alt' => 'Harimau Sumatra'],
                    ['url' => 'https://images.unsplash.com/photo-1652387754718-354ff606f0b8?q=80&w=1178&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'alt' => 'Burung Pelikan'],
                ];
            @endphp

            @foreach ($images as $image)
            {{-- Gambar Galeri --}}
            <div class="relative overflow-hidden rounded-lg group">
                <a href="{{ route('gallery.detail', ['id' => $loop->index]) }}">
                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute top-0 right-0 bg-opacity-0 group-hover:bg-opacity-40 transition-opacity duration-300 flex items-end p-4">
                        <p class="text-white text-sm font-bold opacity-0 bg-black text-center rounded-lg px-2 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">Foto oleh : John Doe</p>
                    </div>
                    <div class="absolute inset-0 bg-opacity-0 group-hover:bg-opacity-40 transition-opacity duration-300 flex items-end p-4">
                        <h3 class="text-white text-lg font-bold opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                            {{ $image['alt'] }}
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
            {{-- Kategori 1 --}}
            <a href="#" class="relative h-64 rounded-lg overflow-hidden group shadow-lg">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-110" style="background-image: url('https://images.unsplash.com/photo-1456926631375-92c8ce872def?q=80&w=2070')"></div>
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <h3 class="text-white text-2xl font-bold">Mamalia Darat</h3>
                </div>
            </a>
            {{-- Kategori 2 --}}
            <a href="#" class="relative h-64 rounded-lg overflow-hidden group shadow-lg">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-110" style="background-image: url('https://images.unsplash.com/photo-1486365227551-f3f90034a57c?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')"></div>
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <h3 class="text-white text-2xl font-bold">Burung Eksotis</h3>
                </div>
            </a>
            {{-- Kategori 3 --}}
            <a href="#" class="relative h-64 rounded-lg overflow-hidden group shadow-lg">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-110" style="background-image: url('https://images.unsplash.com/photo-1437622368342-7a3d73a34c8f?q=80&w=1228&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')"></div>
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <h3 class="text-white text-2xl font-bold">Kehidupan Laut</h3>
                </div>
            </a>
        </div>
    </div>
</section>

@endsection