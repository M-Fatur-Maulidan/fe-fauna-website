@extends('layouts.portal') {{-- Gunakan layout portal yang sudah kita buat --}}

@section('content')

<section class="relative h-screen bg-cover bg-center text-white" style="background-image: url('image/fauna/singa.jpg')">
    {{-- Overlay gelap untuk membuat teks lebih terbaca --}}
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>

    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4">
        <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4">
            Jelajahi Keajaiban Dunia Satwa
        </h1>
        <p class="text-lg md:text-xl max-w-3xl mb-8">
            Temukan informasi, galeri menakjubkan, dan upaya konservasi untuk melindungi satwa liar di seluruh dunia.
        </p>
        <a href="#fitur" class="bg-lime-500 hover:bg-lime-600 text-white font-bold py-3 px-8 rounded-full text-lg transition-transform transform hover:scale-105">
            Mulai Menjelajah
        </a>
    </div>
</section>

<section id="fitur" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-2 text-gray-800">Temukan Lebih Dalam</h2>
        <p class="text-gray-600 max-w-2xl mx-auto mb-12">Website kami menyediakan berbagai sumber daya untuk para pencinta satwa.</p>

        <div class="grid md:grid-cols-3 gap-12">
            <a href="{{ route('gallery') }}" class="hover:shadow-lg transition-shadow duration-300">
                {{-- Card 1 --}}
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <div class="bg-lime-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Galeri Satwa</h3>
                    <p class="text-gray-600">Lihat koleksi foto satwa liar berkualitas tinggi dari berbagai belahan dunia.</p>
                </div>
            </a>
            {{-- Card 2 --}}
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <div class="bg-lime-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Fakta & Edukasi</h3>
                <p class="text-gray-600">Pelajari fakta menarik, habitat, dan perilaku unik dari berbagai spesies hewan.</p>
            </div>

            {{-- Card 3 --}}
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <div class="bg-lime-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2h8a2 2 0 002-2v-1a2 2 0 012-2h1.945M7.724 7.724a1 1 0 011.414 0l3.536 3.536a1 1 0 010 1.414l-3.536 3.536a1 1 0 01-1.414-1.414L10.586 12 7.724 9.136a1 1 0 010-1.414zM15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Dukung Konservasi</h3>
                <p class="text-gray-600">Ketahui bagaimana Anda dapat berpartisipasi dalam upaya pelestarian satwa liar.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container mx-auto px-6 py-20">
        <div class="flex flex-col md:flex-row items-center bg-lime-600 rounded-lg shadow-2xl p-8 md:p-12">
            {{-- Kolom Teks --}}
            <div class="md:w-3/5 text-white">
                <h2 class="text-3xl font-bold mb-4">Peduli dan Beraksi</h2>
                <p class="mb-6 text-lime-100">
                    Jadilah bagian dari komunitas kami. Dapatkan berita terbaru, artikel eksklusif, dan informasi event konservasi langsung di email Anda.
                </p>
                <a href="{{ route('login') }}" class="bg-white text-lime-600 font-bold py-3 px-8 rounded-full text-lg hover:bg-gray-100 transition-colors">
                    Daftar Sekarang
                </a>
            </div>

            {{-- Kolom Gambar (Opsional, tapi mempercantik) --}}
            <div class="md:w-2/5 mt-8 md:mt-0 flex justify-center">
                 <img src="{{ asset('image/human-edited.jpg') }}" alt="Harimau" class="w-64 h-64 rounded-full border-4 border-lime-300 shadow-2xl">
            </div>
        </div>
    </div>
</section>


@endsection