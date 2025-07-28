@extends('layouts.portal') {{-- Sesuaikan dengan layout Anda --}}

@section('content')

{{-- Latar belakang utama --}}
<div class="min-h-screen bg-cover bg-center flex items-center justify-center p-4" style="background-image: url('https://images.unsplash.com/photo-1416138645715-930585fe4ce2?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>

    {{-- 
      Wadah utama menggunakan Flexbox.
      'flex-nowrap' memastikan item tidak turun ke bawah.
    --}}
    <form method="POST" action="{{ route('invoice') }}" class="w-full flex justify-center">
    @csrf {{-- Tambahkan CSRF token untuk keamanan --}}
    <div class="relative w-full max-w-7xl flex flex-row flex-nowrap gap-6 md:gap-8 justify-center">
            <div class="w-1/3 shrink-0 bg-gray-800 bg-opacity-80 backdrop-blur-sm p-8 rounded-xl shadow-lg border border-gray-700">
                <h2 class="text-xl font-bold mb-6 text-center text-white">1. Isi Data Diri</h2>
                <form class="space-y-4">
                    <div>
                        <label for="nama" class="block text-sm font-medium text-lime-400">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" value="{{ old('nama', $userData['nama'] ?? '') }}" class="mt-1 block w-full bg-gray-700 border-gray-600 text-white rounded-md p-2 focus:ring-lime-500 focus:border-lime-500">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-lime-400">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $userData['email'] ?? '') }}" class="mt-1 block w-full bg-gray-700 border-gray-600 text-white rounded-md p-2 focus:ring-lime-500 focus:border-lime-500">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-lime-400">Nomor Handphone</label>
                        <input type="tel" id="phone" name="telepon" value="{{ old('telepon', $userData['telepon'] ?? '') }}" class="mt-1 block w-full bg-gray-700 border-gray-600 text-white rounded-md p-2 focus:ring-lime-500 focus:border-lime-500">
                    </div>
                </form>
            </div>

            <div class="w-1/3 shrink-0 bg-gray-800 bg-opacity-80 backdrop-blur-sm p-8 rounded-xl shadow-lg border border-gray-700">
                <h2 class="text-xl font-bold mb-6 text-center text-white">2. Pilih Metode Bayar</h2>
                
                {{-- Tambahkan max-h-* dan overflow-y-auto di sini --}}
                <div class="space-y-3 max-h-64 overflow-y-auto pr-2">
                    @foreach($paymentMethods as $method)
                        <div class="flex items-center p-3 bg-gray-700 rounded-md hover:bg-gray-600">
                            <input type="radio" id="payment-{{ $method['Code'] }}" name="payment_method" value="{{ $method['Code'] }}" class="h-5 w-5 text-lime-500 focus:ring-lime-400 border-gray-600 bg-gray-900">
                            <label for="payment-{{ $method['Code'] }}" class="ml-3 text-sm text-white w-full cursor-pointer">{{ $method['Name'] }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="w-1/3 shrink-0 bg-gray-800 bg-opacity-80 backdrop-blur-sm p-8 rounded-xl shadow-lg border border-gray-700 flex flex-col justify-between">
                <div>
                    <h2 class="text-xl font-bold mb-6 text-center text-white">3. Konfirmasi & Bayar</h2>
                    <div class="text-white space-y-2">
                        <div class="flex justify-between">
                            <span>Biaya Pendaftaran:</span>
                            <span>Rp 10.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Biaya Admin:</span>
                            <span>Rp 5.000</span>
                        </div>
                        <hr class="border-gray-600 my-2">
                        <div class="flex justify-between font-bold text-lg">
                            <span>Total Bayar:</span>
                            <span>Rp 15.000</span>
                        </div>
                    </div>
                </div>
                
                {{-- Tombol submit akhir --}}
                <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 mt-8 rounded-md hover:bg-blue-700">
                    Bayar Sekarang
                </button>
            </div> 
        </div>
    </form>
</div>

@endsection