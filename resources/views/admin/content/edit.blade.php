@extends('layouts.admin')

@section('content')
    <div class="p-6">
        <div class="flex flex-row justify-between items-center">
            {{-- Judul halaman dinamis --}}
            <h1 class="text-3xl font-bold text-gray-800">Edit Data Fauna: {{ $content['nama_umum'] }}</h1>
            <a href="{{ route('admin.contents') }}"> {{-- Arahkan ke route index fauna --}}
                <button class="bg-white border-2 border-blue-500 text-blue-500 px-4 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition-colors duration-300">
                    Kembali
                </button>
            </a>
        </div>

        {{-- Form action mengarah ke route 'update' --}}
        <form method="POST" action="{{ route('admin.contents.update', $content['id']) }}" enctype="multipart/form-data" class="mt-8 bg-white p-8 rounded-lg shadow-md">
            @csrf
            @method('PUT') {{-- Wajib ada untuk request UPDATE --}}
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">

                {{-- Kolom Kiri --}}
                <div class="space-y-6">
                    <div>
                        <label for="nama_umum" class="block text-gray-700 font-medium mb-2">Nama Umum</label>
                        {{-- 'value' diisi dengan data yang ada --}}
                        <input type="text" name="nama_umum" id="nama_umum" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ old('nama_umum', $content['nama_umum']) }}" required>
                    </div>

                    <div>
                        <label for="nama_ilmiah" class="block text-gray-700 font-medium mb-2">Nama Ilmiah</label>
                        <input type="text" name="nama_ilmiah" id="nama_ilmiah" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ old('nama_ilmiah', $content['nama_ilmiah']) }}">
                    </div>
                    
                    <div>
                        <label for="deskripsi" class="block text-gray-700 font-medium mb-2">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="5" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" required>{{ old('deskripsi', $content['deskripsi']) }}</textarea>
                    </div>

                    <div>
                        <label for="gambar" class="block text-gray-700 font-medium mb-2">Ganti Gambar (Opsional)</label>
                        <div class="flex items-center gap-4 mt-2">
                           @if($content['gambar_url'])
                                <img src="{{ $content['gambar_url'] }}" alt="Gambar saat ini" class="w-20 h-20 object-cover rounded-lg">
                           @endif
                           <input type="file" name="gambar" id="gambar" class="w-full text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        </div>
                    </div>
                </div>

                {{-- Kolom Kanan --}}
                <div class="space-y-6">
                     <div>
                        <label for="habitat" class="block text-gray-700 font-medium mb-2">Habitat</label>
                        <input type="text" name="habitat" id="habitat" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ old('habitat', $content['habitat']) }}">
                    </div>
                    
                    <div>
                        <label for="makanan" class="block text-gray-700 font-medium mb-2">Makanan</label>
                        <input type="text" name="makanan" id="makanan" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ old('makanan', $content['makanan']) }}">
                    </div>

                    <div>
                        <label for="rentang_hidup" class="block text-gray-700 font-medium mb-2">Rentang Hidup</label>
                        <input type="text" name="rentang_hidup" id="rentang_hidup" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ old('rentang_hidup', $content['rentang_hidup']) }}">
                    </div>
                    
                    <div>
                        <div>
                            <label for="status_konservasi" class="block text-gray-700 font-medium mb-2">Status Konservasi</label>
                            <input type="text" name="status_konservasi" id="status_konservasi" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ old('status_konservasi', $content['status_konservasi']) }}">
                        </div>
                    </div>

                    <div>
                        <label for="jenis_fauna_id" class="block text-gray-700 font-medium mb-2">Jenis Fauna</label>
                        <select name="jenis_fauna_id" id="jenis_fauna_id" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" required>
                            {{-- Pilihan ini idealnya dimuat dari tabel 'jenis_fauna' --}}
                            <option value="1" {{ old('jenis_fauna_id', $content['jenis_fauna_id']) == 1 ? 'selected' : '' }}>Mamalia</option>
                            <option value="2" {{ old('jenis_fauna_id', $content['jenis_fauna_id']) == 2 ? 'selected' : '' }}>Burung</option>
                            <option value="3" {{ old('jenis_fauna_id', $content['jenis_fauna_id']) == 3 ? 'selected' : '' }}>Reptil</option>
                            <option value="4" {{ old('jenis_fauna_id', $content['jenis_fauna_id']) == 4 ? 'selected' : '' }}>Amfibi</option>
                            <option value="5" {{ old('jenis_fauna_id', $content['jenis_fauna_id']) == 5 ? 'selected' : '' }}>Ikan</option>
                        </select>
                    </div>
                </div>
            </div>

            {{-- Tombol Aksi --}}
            <div class="mt-8 pt-6 border-t border-gray-200">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors duration-300">
                    Update Data Fauna
                </button>
            </div>
        </form>
    </div>
@endsection