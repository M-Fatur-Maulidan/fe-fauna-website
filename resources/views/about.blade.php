@extends('layouts.portal')

@section('content')

<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-12">
            {{-- Kolom Teks --}}
            <div class="md:w-1/2">
                <h2 class="text-sm font-bold uppercase text-lime-500 mb-2">Tentang Kami</h2>
                <h1 class="text-4xl font-bold text-gray-800 mb-6">LINUX MINT</h1>
                <p class="text-gray-600 leading-relaxed">
                    Kami dari kelompok distro MINT, memilih tema fauna sebagai identitas visual kami. Inspirasi ini berangkat dari logo Linux Mint yang didominasi warna hijau warna yang kerap diasosiasikan dengan flora. Namun, dalam keseimbangan alam, flora hampir tak pernah hadir tanpa fauna. Keduanya saling melengkapi, sebagaimana teknologi dan kreativitas dalam pengembangan sistem.
                </p>
            </div>
            {{-- Kolom Gambar --}}
            <div class="md:w-1/2 flex justify-center">
                <img src="https://images.unsplash.com/photo-1511216113906-8f57bb83e776?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Singa" class="rounded-lg shadow-lg shadow-lime-500/40 w-2/3">
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
        <h2 class="text-3xl font-bold mb-12 text-gray-800">Tim Linux Mint</h2>

        <div class="swiper team-slider relative">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="text-center">
                        <img src="{{ asset('image/anggota/icon-orang.png') }}" alt="M. Fatur Maulidan Azzahra" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-lg">
                        <p class="text-sm">10124907</p>
                        <h3 class="text-xl font-bold">M. Fatur Maulidan Azzahra</h3>
                        <p class="text-gray-500">Project Manager</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="text-center">
                        <img src="{{ asset('image/anggota/icon-orang.png') }}" alt="Rizki Maulana Hakim" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-lg">
                        <p class="text-sm">10124317</p>
                        <h3 class="text-xl font-bold">Rizki Maulana Hakim</h3>
                        <p class="text-gray-500">Quality Assurance</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="text-center">
                        <img src="{{ asset('image/anggota/icon-orang.png') }}" alt="Asep Saepul" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-lg">
                        <p class="text-sm">10124324</p>
                        <h3 class="text-xl font-bold">Asep Saepul</h3>
                        <p class="text-gray-500">System Analyst</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="text-center">
                        <img src="{{ asset('image/anggota/icon-orang.png') }}" alt="Muhammad Faiz Rizqullah" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-lg">
                        <p class="text-sm">10124330</p>
                        <h3 class="text-xl font-bold">Muhammad Faiz Rizqullah</h3>
                        <p class="text-gray-500">Dev-Ops</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="text-center">
                        <img src="{{ asset('image/anggota/icon-orang.png') }}" alt="Rasyid Kusuma Hidayat" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-lg">
                        <p class="text-sm">10124335</p>
                        <h3 class="text-xl font-bold">Rasyid Kusuma Hidayat</h3>
                        <p class="text-gray-500">UI/UX Designer</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="text-center">
                        <img src="{{ asset('image/anggota/icon-orang.png') }}" alt="Putri Alexa Maharani" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-lg">
                        <p class="text-sm">10124340</p>
                        <h3 class="text-xl font-bold">Putri Alexa Maharani</h3>
                        <p class="text-gray-500">Front-End Developer</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="text-center">
                        <img src="{{ asset('image/anggota/icon-orang.png') }}" alt="Rahul Weya" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-lg">
                        <p class="text-sm">10124345</p>
                        <h3 class="text-xl font-bold">Rahul Weya</h3>
                        <p class="text-gray-500">Front-End Developer</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="text-center">
                        <img src="{{ asset('image/anggota/icon-orang.png') }}" alt="Ibda Muhafid Romdoni" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-lg">
                        <p class="text-sm">10124350</p>
                        <h3 class="text-xl font-bold">Ibda Muhafid Romdoni</h3>
                        <p class="text-gray-500">Back-End Developer</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="text-center">
                        <img src="{{ asset('image/anggota/icon-orang.png') }}" alt="Muhammad Andhika Aristya Ridwan" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-lg">
                        <p class="text-sm">10124357</p>
                        <h3 class="text-xl font-bold">Muhammad Andhika Aristya Ridwan</h3>
                        <p class="text-gray-500">Back-End Developer</p>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
    <script>
        const swiper = new Swiper('.team-slider', {
            loop: true, // Membuat slider berputar tanpa henti
            spaceBetween: 30, // Jarak antar slide

            // Mengatur jumlah slide yang terlihat berdasarkan ukuran layar (responsif)
            slidesPerView: 3,

            // Navigation (panah kiri-kanan)
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
@endpush