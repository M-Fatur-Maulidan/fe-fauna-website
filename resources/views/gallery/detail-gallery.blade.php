@extends('layouts.portal') {{-- Gunakan layout portal Anda --}}

@section('content')

<section class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        
        {{-- Layout Grid Utama (2 kolom di desktop, 1 kolom di mobile) --}}
        <div class="grid md:grid-cols-5 gap-8 lg:gap-12">
            <div class="md:col-span-3">
                <div class="relative">
                    <img src="{{ $item['gambar_url'] }}" 
                         alt="{{ $item['nama_umum'] }}" 
                         class="w-full h-auto object-cover rounded-xl shadow-2xl">
                    <div class="absolute top-4 right-4 bg-black bg-opacity-50 text-white px-3 py-1 rounded-full text-sm">
                        Dibuat oleh : {{ $item['created_by'] }}
                    </div>
                </div>
            </div>

            <div class="md:col-span-2">
                <h1 class="text-4xl lg:text-5xl font-extrabold text-gray-900">
                    {{ $item['nama_umum'] }}
                </h1>
                <p class="mt-2 text-xl font-medium text-gray-500 italic">
                    {{ $item['nama_ilmiah'] }}
                </p>

                <p class="mt-6 text-gray-700 leading-relaxed">
                    {{ $item['deskripsi'] }}
                </p>

                {{-- Informasi Kunci --}}
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi Kunci:</h3>
                    <div class="space-y-4">
                        {{-- Status Konservasi --}}
                        <div class="flex items-center">
                            <span class="font-semibold w-32 shrink-0">Status Konservasi</span>
                            <span class="bg-red-100 text-red-800 text-sm font-bold px-3 py-1 rounded-full">
                                {{ $item['status_konservasi'] }}
                            </span>
                        </div>
                        {{-- Habitat --}}
                        <div class="flex items-center">
                            <span class="font-semibold w-32 shrink-0">Habitat</span>
                            <span class="text-gray-700">{{ $item['habitat'] }}</span>
                        </div>
                        {{-- Makanan --}}
                        <div class="flex items-center">
                            <span class="font-semibold w-32 shrink-0">Makanan</span>
                            <span class="text-gray-700">{{ $item['makanan'] }}</span>
                        </div>
                        {{-- Rentang Hidup --}}
                        <div class="flex items-center">
                            <span class="font-semibold w-32 shrink-0">Rentang Hidup</span>
                            <span class="text-gray-700">{{ $item['rentang_hidup'] }}</span>
                        </div>
                    </div>
                </div>

                {{-- Tombol Kembali --}}
                <div class="mt-10">
                    <a href="{{ route('gallery') }}" class="inline-flex items-center gap-2 bg-lime-500 text-white font-bold py-3 px-6 rounded-lg hover:bg-lime-600 transition-colors duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        Kembali ke Galeri
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection