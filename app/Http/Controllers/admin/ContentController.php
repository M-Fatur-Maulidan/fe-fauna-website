<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContentController extends Controller
{
    public function create() {
        return view('admin.content.create'); // Assuming you have a view for creating content
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_umum' => 'required|string',
            'nama_ilmiah'  => 'required|string',
            'deskripsi' => 'required|string',
            'status_konservasi' => 'required|string',
            'habitat' => 'required|string',
            'makanan' => 'required|string',
            'rentang_hidup' => 'required|string',
        ]);

        // Inisialisasi HTTP Client dengan token
        $httpClient = Http::withToken(session('api_token')['accessToken']);

        if ($request->hasFile('gambar')) {
            // Jika ada file, gunakan ->attach()
            $httpClient->attach(
                'gambar', // Ini adalah 'nama field' untuk file yang akan diterima backend lain
                file_get_contents($request->file('gambar')->getRealPath()), // Isi file
                $request->file('gambar')->getClientOriginalName() // Nama file asli
            );
        }

        $response = $httpClient->post(
            env('API_BASE_URL') . '/admin/contents',
            $request->except('gambar')
        );

        if ($response->successful()) {
            return redirect()->route('admin.contents')->with('success', 'Content created successfully.');
        } else {
            return redirect()->back()->withErrors(['status' => 'Failed to create content.']);
        }
    }

    public function destroy($id)
    {
        $httpClient = Http::withToken(session('api_token')['accessToken']);

        $response = $httpClient->delete(env('API_BASE_URL') . '/admin/contents/' . $id);

        if ($response->successful()) {
            return redirect()->route('admin.contents')->with('success', 'Content deleted successfully.');
        } else {
            return redirect()->back()->withErrors(['status' => 'Failed to delete content.']);
        }
    }
}
