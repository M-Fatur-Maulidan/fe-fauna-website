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
        // Logic to show user edit form
        // Fetch user data by $id
        return view('admin.edit_user', compact('id')); // Assuming you have a view for editing users
    }

    public function update(Request $request, $id)
    {
        // Logic to update user data
        // Validate and update user data here
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
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
