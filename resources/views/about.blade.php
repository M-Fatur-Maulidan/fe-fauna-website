@extends('layouts.portal')

@section('content')

<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-12">
            {{-- Kolom Teks --}}
            <div class="md:w-1/2">
                <h2 class="text-sm font-bold uppercase text-lime-500 mb-2">Tentang Kami</h2>
                <h1 class="text-4xl font-bold text-gray-800 mb-6">Misi Kami: Menjembatani Manusia dan Alam Liar</h1>
                <p class="text-gray-600 leading-relaxed">
                    Kami percaya bahwa pengetahuan adalah kunci untuk menumbuhkan kepedulian. FaunaPedia didirikan dengan tujuan untuk menjadi sumber informasi yang akurat dan inspirasi visual yang memukau tentang keanekaragaman hayati di planet kita. Melalui edukasi, kami berharap dapat mendorong lebih banyak orang untuk peduli dan berpartisipasi aktif dalam upaya konservasi.
                </p>
            </div>
            {{-- Kolom Gambar --}}
            <div class="md:w-1/2">
                <img src="https://images.unsplash.com/photo-1455218873509-8097305ee378?q=80&w=1887" alt="Orangutan" class="rounded-lg shadow-2xl w-full">
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-12 text-gray-800">Nilai-Nilai yang Kami Pegang</h2>
        <div class="grid md:grid-cols-3 gap-12">
             {{-- Nilai 1 --}}
            <div class="p-8">
                <div class="text-lime-500 mb-4">
                    <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Edukasi</h3>
                <p class="text-gray-600">Menyebarkan pengetahuan yang akurat dan mudah diakses untuk semua kalangan.</p>
            </div>
             {{-- Nilai 2 --}}
            <div class="p-8">
                <div class="text-lime-500 mb-4">
                    <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Inspirasi</h3>
                <p class="text-gray-600">Menginspirasi kecintaan terhadap alam melalui visual yang memukau dan cerita yang menyentuh.</p>
            </div>
             {{-- Nilai 3 --}}
            <div class="p-8">
                <div class="text-lime-500 mb-4">
                    <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2h8a2 2 0 002-2v-1a2 2 0 012-2h1.945M10 15a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Aksi</h3>
                <p class="text-gray-600">Mendorong dan memfasilitasi tindakan nyata untuk mendukung upaya konservasi satwa liar.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-12 text-gray-800">Tim di Balik Layar</h2>
        <div class="grid md:grid-cols-3 gap-12">
            {{-- Tim 1 --}}
            <div class="text-center">
                <img src="https://i.pravatar.cc/150?u=jane" alt="Jane Doe" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-lg">
                <h3 class="text-xl font-bold">Jane Doe</h3>
                <p class="text-gray-500">Founder & Chief Editor</p>
            </div>
            {{-- Tim 2 --}}
            <div class="text-center">
                <img src="https://i.pravatar.cc/150?u=john" alt="John Smith" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-lg">
                <h3 class="text-xl font-bold">John Smith</h3>
                <p class="text-gray-500">Lead Photographer</p>
            </div>
            {{-- Tim 3 --}}
            <div class="text-center">
                <img src="https://i.pravatar.cc/150?u=alex" alt="Alex Green" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-lg">
                <h3 class="text-xl font-bold">Alex Green</h3>
                <p class="text-gray-500">Conservation Specialist</p>
            </div>
        </div>
    </div>
</section>

@endsection