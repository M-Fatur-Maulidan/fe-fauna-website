@extends('layouts.admin') {{-- Menggunakan layout admin Anda --}}

@section('content') {{-- Mengisi bagian @yield('content') di layout --}}
    
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        {{-- Contoh Kartu Statistik --}}
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-gray-700">Total Pengguna</h3>
            <p class="text-4xl font-bold text-gray-900 mt-2">{{ $dashboardData['data']['user'] }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-gray-700">Data Fauna</h3>
            <p class="text-4xl font-bold text-gray-900 mt-2">{{ $dashboardData['data']['content'] }}</p>
        </div>
         <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-gray-700">Data Feedback</h3>
            <p class="text-4xl font-bold text-gray-900 mt-2">{{ $dashboardData['data']['contact'] }}</p>
        </div>
    </div>
@endsection