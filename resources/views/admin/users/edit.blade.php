@extends('layouts.admin')

@section('content')
    <div class="p-6">
        <div class="flex flex-row justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-800">Edit Pengguna: {{ $user['nama'] }}</h1>
            <a href="{{ route('admin.users') }}">
                <button class="bg-white border-2 border-blue-500 text-blue-500 px-4 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition-colors duration-300">
                    Kembali
                </button>
            </a>
        </div>

        <form method="POST" action="{{ route('admin.users.update', $user['id']) }}" enctype="multipart/form-data" class="mt-8 bg-white p-8 rounded-lg shadow-md">
            @csrf
            @method('PUT') {{-- Method spoofing untuk request UPDATE --}}
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">

                {{-- Kolom Kiri --}}
                <div class="space-y-6">
                    <div>
                        <label for="nama" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ old('nama', $user['nama']) }}" required>
                    </div>

                    <div>
                        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                        <input type="email" name="email" id="email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ old('email', $user['email']) }}" required>
                    </div>

                    <div>
                        <label for="password" class="block text-gray-700 font-medium mb-2">Password Baru (Opsional)</label>
                        <input type="password" name="password" id="password" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Kosongkan jika tidak ingin diubah">
                    </div>
                </div>

                {{-- Kolom Kanan --}}
                <div class="space-y-6">
                     <div>
                        <label for="telepon" class="block text-gray-700 font-medium mb-2">Telepon</label>
                        <input type="tel" name="telepon" id="telepon" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ old('telepon', $user['telepon'] ?? '') }}">
                    </div>

                    <div>
                        <label for="alamat" class="block text-gray-700 font-medium mb-2">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">{{ old('alamat', $user['alamat'] ?? '') }}</textarea>
                    </div>

                    <div>
                        <label for="foto" class="block text-gray-700 font-medium mb-2">Ganti Foto Profil (Opsional)</label>
                        <div class="flex items-center gap-4">
                            @if(isset($user['foto_url']))
                                <img src="{{ $user['foto_url'] }}" alt="Foto profil" class="w-16 h-16 rounded-full object-cover">
                            @endif
                            <input type="file" name="foto" id="foto" class="w-full text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tombol Aksi --}}
            <div class="mt-8 pt-6 border-t border-gray-200">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors duration-300">
                    Update Pengguna
                </button>
            </div>
        </form>
    </div>
@endsection