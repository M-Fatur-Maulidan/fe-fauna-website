@extends('layouts.admin')

@section('content')
    <div class="p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Pengguna</h1>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nama</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4 border-b">1</td>
                    <td class="py-2 px-4 border-b">John Doe</td>
                    <td class="py-2 px-4 border-b">john@example.com</td>
                    <td class="py-2 px-4 border-b">
                        <a href="#" class="text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="text-red-500 hover:underline">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b">2</td>
                    <td class="py-2 px-4 border-b">Jane Smith</td>
                    <td class="py-2 px-4 border-b">jane@example.com</td>
                    <td class="py-2 px-4 border-b">
                        <a href="#" class="text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="text-red-500 hover:underline">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection