@extends('layouts.auth')

@section('content')
    {{-- Wadah utama yang menutupi seluruh layar dan menggunakan gambar sebagai background --}}
    <div class="relative w-screen h-screen bg-cover bg-center" style="background-image: url('{{ asset('image/fauna/singa_1.jpg') }}');">
        <div class="absolute inset-0 justify-items-end items-center w-full h-full">
            {{-- Konten di dalam wadah utama, seperti form login --}}
            <div class="bg-white opacity-90 w-1/2 h-full d-flex justify-items-center content-center">
                <a href="{{ route('login') }}" class="">
                    <div class="flex flex-row justify-start w-full px-8 items-center gap-x-2">
                        <img src="{{ asset('image/icon/back.png') }}" alt="Logo Back" class="w-4 h-4">
                        <div class="text-lime-500 hover:underline text-md ">Back</div>
                    </div>
                </a>
                <form method="POST" action="{{ route('register.post') }}" class="flex justify-center items-center w-full">
                    @csrf
                    {{-- Form login yang diletakkan di tengah wadah --}}
                    <div class="w-3/4 h-3/4 px-8 pt-4 pb-4 rounded-lg d-flex flex-col justify-items-center content-center">
                        {{-- Bagian atas form login yang berisi logo dan judul halaman --}}
                        {{-- Logo di bagian atas form login --}}
                        <div class="m-4">
                            <img src="{{ asset('image/logo.png') }}" alt="Logo" class="w-16 h-16">
                        </div>
                        {{-- Judul halaman login dan form input untuk username dan password --}}
                        <div class="text-center text-2xl font-bold">Register</div>
                        <div class="flex flex-col m-4 w-full gap-2">
                            <div class="text-md font-sans text-lime-500">Nama</div>
                            <div class="">
                                <input type="text" name="nama" value="{{ old('nama') }}" class="border border-lime-500 rounded-md w-full p-2 mb-4" placeholder="Enter your name">
                                @error('name')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-col m-4 w-full gap-2">
                            <div class="text-md font-sans text-lime-500">Email</div>
                            <div class="">
                                <input type="email" name="email" value="{{ old('email') }}" class="border border-lime-500 rounded-md w-full p-2 mb-4" placeholder="Enter your email">
                                @error('email')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-col m-4 w-full gap-2">
                            <div class="text-md font-sans text-lime-500">Nomor Telepon</div>
                            <div class="">
                                <input type="number" name="telepon" value="{{ old('telepon') }}" class="border border-lime-500 rounded-md w-full p-2 mb-4" placeholder="Enter your phone number">
                                @error('telepon')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-col m-4 w-full gap-2">
                            <div class="text-md font-sans text-lime-500">Password</div>
                            <div class="">
                                <input type="password" name="password" class="border border-lime-500 rounded-md w-full p-2 mb-4" placeholder="Enter your password">
                                @error('password')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="flex justify-center mt-8">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 mt-4">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
