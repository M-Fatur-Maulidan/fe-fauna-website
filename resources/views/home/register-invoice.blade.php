@extends('layouts.portal') {{-- Sesuaikan dengan layout Anda --}}

@section('content')

{{-- Latar belakang utama --}}
<div class="min-h-screen bg-cover bg-center flex items-center justify-center p-4" style="background-image: url('https://images.unsplash.com/photo-1416138645715-930585fe4ce2?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>

    {{-- Wadah utama untuk struk/invoice --}}
    <div class="relative w-full max-w-lg bg-gray-800 bg-opacity-80 backdrop-blur-sm p-8 md:p-10 rounded-xl shadow-lg border border-gray-700 text-white">

        <div class="text-center pb-6 border-gray-600">
            <h1 class="text-2xl font-bold text-lime-400">Berikut adalah Rincian Pembayaran</h1>
        </div>

        <div class="mt-6 space-y-4">
            <div class="flex flex-col text-center">
                <span class="text-gray-400">Nomor Referensi:</span>
                <span class="font-mono text-lg font-bold">{{ $invoiceData['data']['invoice_no'] }}</span>
            </div>
            <div class="flex flex-col text-center">
                <span class="text-gray-400">Metode Bayar:</span>
                <span class="font-mono text-lg font-bold">Virtual Account {{ $invoiceData['response']['Data']['Channel'] }}</span>
            </div>

            <div class="flex flex-col text-center">
                <span class="text-gray-400">Virtual Account</span>
                <span class="font-mono text-lg font-bold">{{ $invoiceData['response']['Data']['PaymentNo'] }}</span>
            </div>
        </div>

        <div class="mt-4 pt-4 border-t-2 border-dashed border-gray-500">
            <div class="flex flex-col text-center font-bold text-xl">
                <span class="text-lime-400">Total Dibayar</span>
                <span class="text-lime-400">Rp. {{ $invoiceData['total_harga'] }}</span>
                <span class="text-lime-400">Terima kasih telah bertransaksi!</span>
            </div>
        </div>
        
        <div class="mt-10 flex flex-col md:flex-row gap-4">
            <a href="{{ route('logout') }}" class="w-full text-center bg-blue-600 text-white font-bold py-3 rounded-md hover:bg-blue-700">
                Sudah dibayar
            </a>
        </div>

    </div>
</div>

@endsection