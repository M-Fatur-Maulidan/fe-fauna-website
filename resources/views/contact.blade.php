@extends('layouts.portal')

@section('content')

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        
        {{-- Judul Utama Seksi --}}
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800">Hubungi Kami</h1>
            <p class="text-lg text-gray-600 mt-4 max-w-2xl mx-auto">
                Punya pertanyaan atau masukan? Kami senang mendengarnya dari Anda.
            </p>
        </div>

        {{-- Konten Utama (Layout Grid 2 Kolom) --}}
        <div class="grid md:grid-cols-2 gap-12 items-start">

            <div class="space-y-8">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Informasi Kontak</h2>
                    <div class="space-y-4 text-gray-700">
                        {{-- Alamat --}}
                        <div class="flex items-start gap-4">
                            <div class="bg-lime-100 p-3 rounded-full mt-1">
                                <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-semibold">Alamat</h3>
                                <p>Jl. Dipati Ukur No.112-116, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132</p>
                            </div>
                        </div>
                        {{-- Email --}}
                        <div class="flex items-start gap-4">
                             <div class="bg-lime-100 p-3 rounded-full mt-1">
                                <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-semibold">Email</h3>
                                <p>contact@linuxmint.com</p>
                            </div>
                        </div>
                        {{-- Telepon --}}
                        <div class="flex items-start gap-4">
                             <div class="bg-lime-100 p-3 rounded-full mt-1">
                                <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                             <div>
                                <h3 class="font-semibold">Telepon</h3>
                                <p>+62 88 888 8888</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Peta --}}
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Lokasi Kami</h2>
                     <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden border-2 border-gray-200">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0296161820597!2d107.61289431133129!3d-6.887055993083214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6f8aa08188b%3A0x632d24e6061e8903!2sUniversitas%20Komputer%20Indonesia!5e0!3m2!1sen!2sid!4v1753009543720!5m2!1sen!2sid" 
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h2>
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    {{-- Nama --}}
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text" name="name" id="name" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-lime-500 focus:border-transparent transition">
                    </div>
                    {{-- Email --}}
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Alamat Email</label>
                        <input type="email" name="email" id="email" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-lime-500 focus:border-transparent transition">
                    </div>
                    {{-- Subjek --}}
                     <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subjek</label>
                        <input type="text" name="subject" id="subject" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-lime-500 focus:border-transparent transition">
                    </div>
                    {{-- Pesan --}}
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan Anda</label>
                        <textarea name="message" id="message" rows="5" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-lime-500 focus:border-transparent transition"></textarea>
                    </div>
                    {{-- Tombol Kirim --}}
                    <div>
                        <button type="submit" class="w-full bg-lime-500 text-white font-bold py-3 px-6 rounded-lg hover:bg-lime-600 transition-colors duration-300">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
