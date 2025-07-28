<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function create()
    {
        // Logic to show user creation form
        return view('admin.users.create'); // Assuming you have a view for creating users
    }

    public function store(Request $request)
    {

       $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Contoh validasi untuk foto
        ]);

        // Inisialisasi HTTP Client dengan token
        $httpClient = Http::withToken(session('api_token')['accessToken']);

        // 2. Cek apakah ada file foto yang di-upload
        if ($request->hasFile('foto')) {
            // Jika ada file, gunakan ->attach()
            $httpClient->attach(
                'foto', // Ini adalah 'nama field' untuk file yang akan diterima backend lain
                file_get_contents($request->file('foto')->getRealPath()), // Isi file
                $request->file('foto')->getClientOriginalName() // Nama file asli
            );
        }
        
        // 3. Kirim request POST dengan data lain
        //    Gunakan $request->except('foto') untuk mengirim semua input kecuali file
        $response = $httpClient->post(
            env('API_BASE_URL') . '/admin/users',
            $request->except('foto')
        );

        if ($response->successful()) {
            return redirect()->route('admin.users')->with('success', 'User created successfully.');
        } else {
            return redirect()->back()->withErrors(['status' => 'Failed to create user.']);
        }
    }

    public function edit($id)
    {
        $response = Http::withToken(session('api_token')['accessToken'])
            ->get(env('API_BASE_URL') . '/admin/users/' . $id);

        if ($response->successful()) {
            $user = $response->json()['data'];
            return view('admin.users.edit', ['user' => $user]); // Assuming you have a view for editing users
        } else {
            return redirect()->back()->withErrors(['status' => 'Failed to fetch user data.']);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'nullable|string|min:8', // Password is optional for update
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Example validation for photo
        ]);

        // Initialize HTTP Client with token
        $httpClient = Http::withToken(session('api_token')['accessToken']);

        // Check if a photo file is uploaded
        if ($request->hasFile('foto')) {
            // If there is a file, use ->attach()
            $httpClient->attach(
                'foto', // This is the 'field name' for the file that will be received
                file_get_contents($request->file('foto')->getRealPath()), // File content
                $request->file('foto')->getClientOriginalName() // Original file name
            );
        }

        // Send PUT request with other data
        $response = $httpClient->put(
            env('API_BASE_URL') . '/admin/users/' . $id,
            $request->except('foto') // Send all inputs except the file
        );

        if ($response->failed()) {
            return redirect()->back()->withErrors(['status' => 'Failed to update user.']);
        } else {
            return redirect()->route('admin.users')->with('success', 'User updated successfully.');
        }

    }

    public function destroy($id)
    {
        $response = Http::withToken(session('api_token')['accessToken'])
            ->delete(env('API_BASE_URL') . '/admin/users/' . $id);

        if ($response->failed()) {
            return redirect()->back()->withErrors(['status' => 'Failed to delete user.']);
        } else {
            return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
        }
    }
}
