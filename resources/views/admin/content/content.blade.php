@extends('layouts.admin')

@section('content')
    <div class="p-6">
        <div class="flex flex-row justify-between">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Manajemen Fauna</h1>
            <a href="{{ route('admin.contents.create') }}" class="flex justify-center align-items-center h-auto my-3">
                <button class="mx-2  border-2 border-blue-500 bg-blue-500 px-2 rounded-lg text-white hover:border-blue-500 hover:bg-white hover:text-blue-500">Tambah</button>
            </a>
        </div>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nomor</th>
                    <th class="py-2 px-4 border-b">Nama Umum</th>
                    <th class="py-2 px-4 border-b">Nama Ilmiah</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contents as $content)
                    <tr align="center">
                        {{-- Display a sequential number for each row --}}
                        <td class="py-2 px-4 border-b">{{ $content['no'] }}</td> 
                        
                        {{-- Access content properties using $content->propertyName --}}
                        <td class="py-2 px-4 border-b">{{ $content['nama_umum'] }}</td> 
                        <td class="py-2 px-4 border-b">{{ $content['nama_ilmiah'] }}</td>
                        
                        <td class="py-2 px-4 border-b">
                            {{-- Tombol Edit --}}
                            <a href="{{ route('admin.contents.edit', $content['id']) }}" class="text-blue-500 border-2 border-blue-500 py-1 px-2 rounded-lg hover:bg-blue-500 hover:text-white mr-2">Edit</a>

                            <div x-data="{ open: false }" class="inline">
                                
                                {{-- Tombol Pemicu Modal --}}
                                <button @click="open = true" class="text-red-500 border-2 border-red-500 py-1 px-2 rounded-lg hover:bg-red-500 hover:text-white text-sm">
                                    Hapus
                                </button>

                                {{-- Modal Konfirmasi --}}
                                <div x-show="open" @click.away="open = false" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50" style="display: none;">
                                    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                                        <h2 class="text-xl font-bold mb-4">Konfirmasi Hapus</h2>
                                        <p>Apakah Anda yakin ingin menghapus konten ini?</p>
                                        <div class="mt-6 flex justify-end">
                                            {{-- Tombol Batal --}}
                                            <button @click="open = false" class="mr-2 text-gray-700 border-2 border-gray-300 py-1 px-4 rounded-lg hover:bg-gray-200">
                                                Batal
                                            </button>
                                            
                                            {{-- Form untuk Aksi Hapus --}}
                                            <form method="POST" action="{{ route('admin.contents.destroy', $content['id']) }}" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-white bg-red-500 border-2 border-red-500 py-1 px-4 rounded-lg hover:bg-red-600">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection