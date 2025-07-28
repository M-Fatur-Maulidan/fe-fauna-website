@extends('layouts.admin')

@section('content')
    <div class="p-6">
        <div class="flex flex-row">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Feedback</h1>
        </div>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nomor</th>
                    <th class="py-2 px-4 border-b">Nama</th>
                    <th class="py-2 px-4 border-b">Message</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr align="center">
                        {{-- Display a sequential number for each row --}}
                        <td class="py-2 px-4 border-b">{{ $contact['no'] }}</td> 
                        
                        {{-- Access contact properties using $contact->propertyName --}}
                        <td class="py-2 px-4 border-b">{{ $contact['nama'] }}</td> 
                        <td class="py-2 px-4 border-b">{{ $contact['message'] }}</td>
                        
                        <td class="py-2 px-4 border-b">
                            {{-- Tombol Edit --}}
                            <div x-data="{ open: false }" class="inline">
                                
                                {{-- Tombol Pemicu Modal --}}
                                <button @click="open = true" class="text-red-500 border-2 border-red-500 py-1 px-2 rounded-lg hover:bg-red-500 hover:text-white text-sm">
                                    Hapus
                                </button>

                                {{-- Modal Konfirmasi --}}
                                <div x-show="open" @click.away="open = false" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50" style="display: none;">
                                    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                                        <h2 class="text-xl font-bold mb-4">Konfirmasi Hapus</h2>
                                        <p>Apakah Anda yakin ingin menghapus feedback ini?</p>
                                        <div class="mt-6 flex justify-end">
                                            {{-- Tombol Batal --}}
                                            <button @click="open = false" class="mr-2 text-gray-700 border-2 border-gray-300 py-1 px-4 rounded-lg hover:bg-gray-200">
                                                Batal
                                            </button>
                                            
                                            {{-- Form untuk Aksi Hapus --}}
                                            <form method="POST" action="{{ route('admin.contacts.destroy', $contact['id']) }}" class="inline">
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