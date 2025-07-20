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
                    ['url' => 'https://images.unsplash.com/photo-1557050543-4d5f4e07ef46?q=80&w=1932', 'alt' => 'Macan Tutul'],
                    ['url' => 'https://images.unsplash.com/photo-1516934024742-b362a1a4b494?q=80&w=1887', 'alt' => 'Burung Toucan'],
                    ['url' => 'https://images.unsplash.com/photo-1564349683136-77e08dba1ef7?q=80&w=2072', 'alt' => 'Gajah'],
                    ['url' => 'https://images.unsplash.com/photo-1542488339-634532677d3a?q=80&w=1887', 'alt' => 'Iguana'],
                    ['url' => 'https://images.unsplash.com/photo-1437622368342-7a3d73a34c8f?q=80&w=1920', 'alt' => 'Penyu Laut'],
                    ['url' => 'https://images.unsplash.com/photo-1518461239931-118a1a953def?q=80&w=1887', 'alt' => 'Rubah Merah'],
                    ['url' => 'https://images.unsplash.com/photo-1526082613535-9859943aee5a?q=80&w=1887', 'alt' => 'Katak Pohon'],
                    ['url' => 'https://images.unsplash.com/photo-1534759846112-37f14e64dfd4?q=80&w=1887', 'alt' => 'Burung Hantu'],
                ];
            @endphp

            @foreach ($images as $image)
            <div class="relative overflow-hidden rounded-lg group">
                <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-opacity duration-300 flex items-end p-4">
                    <h3 class="text-white text-lg font-bold opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                        {{ $image['alt'] }}
                    </h3>
                </div>
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
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-110" style="background-image: url('https://images.unsplash.com/photo-1604940500627-7c873fd31720?q=80&w=2070')"></div>
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <h3 class="text-white text-2xl font-bold">Mamalia Darat</h3>
                </div>
            </a>
            {{-- Kategori 2 --}}
            <a href="#" class="relative h-64 rounded-lg overflow-hidden group shadow-lg">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-110" style="background-image: url('https://images.unsplash.com/photo-1456926631375-92c8ce872def?q=80&w=2070')"></div>
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <h3 class="text-white text-2xl font-bold">Burung Eksotis</h3>
                </div>
            </a>
            {{-- Kategori 3 --}}
            <a href="#" class="relative h-64 rounded-lg overflow-hidden group shadow-lg">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-110" style="background-image: url('https://images.unsplash.com/photo-1535457609626-89a35e412a7a?q=80&w=2070')"></div>
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <h3 class="text-white text-2xl font-bold">Kehidupan Laut</h3>
                </div>
            </a>
        </div>
    </div>
</section>

@endsection