@extends('base')

@section('content')
    {{-- Wadah utama yang menutupi seluruh layar dan menggunakan gambar sebagai background --}}
    <div class="relative w-screen h-screen bg-cover bg-center" style="background-image: url('{{ asset('image/fauna/singa_1.jpg') }}');">
        <div class="absolute inset-0 d-flex flex-col justify-items-end items-center w-full h-full">
            {{-- Konten di dalam wadah utama, seperti form login --}}
            <div class="bg-black opacity-75 w-1/2 h-full d-flex justify-items-center content-center">
                {{-- Form login yang diletakkan di tengah wadah --}}
                <div class="bg-white w-3/4 h-3/4 pr-2 pl-2 pt-4 pb-4 rounded-lg shadow-lg d-flex flex-col justify-items-center content-center">
                    {{-- Bagian atas form login yang berisi logo dan judul halaman --}}
                    {{-- Logo di bagian atas form login --}}
                    <div class="mb-4 ">
                        <img src="{{ asset('image/logo.png') }}" alt="Logo" class="w-16 h-16">
                    </div>
                    {{-- Judul halaman login dan form input untuk username dan password --}}
                    <div class="text-center text-2xl font-bold">Login Page</div>
                    <div class="mt-4 mb-4 w-full">
                        <div class="">Username</div>
                        <input type="text" class="border border-gray-300 rounded-md w-full p-2 mb-4" placeholder="Enter your username">
                    </div>
                    <div class="mb-4 w-full">
                        <div class="">Password</div>
                        <input type="password" class="border border-gray-300 rounded-md w-full p-2 mb-4" placeholder="Enter your password">
                    </div>
                    <div class="flex justify-center">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Login</button>
                    </div>
                    <div class="text-center mt-4">
                        <a href="#" class="text-blue-500 hover:underline">Forgot Password?</a>
                        <div class="">
                            <a href="#" class="text-blue-500 hover:underline">Create an Account</a>
                        </div>
                        <div class="">
                            <a href="#" class="text-blue-500 hover:underline">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
