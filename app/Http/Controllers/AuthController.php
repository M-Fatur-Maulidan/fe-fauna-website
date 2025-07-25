<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $response = Http::post(env('API_BASE_URL') . '/auth/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);


        if ($response->successful()) {
            $data = $response->json();

            session(['api_token' => $data['data']['token']]);

            // dd($data);

            if ($data['data']['token']['user']['roles'] === 'Admin') {
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('home')->with('success', 'Login successful. Welcome back!');

        } else {
            $errorMessage = $response->json('message', 'Login gagal. Silakan cek kembali email dan password Anda.');

            return redirect()->back()->withErrors(['status' => $errorMessage]);
        }
    }

    public function registerIndex()
    {
        return view('auth/register'); // Redirect to registration page
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            'telepon' => 'required|string|max:15',
        ]);

        $response = Http::post(env('API_BASE_URL') . '/auth/register', [
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'telepon' => $request->telepon,
        ]);

        if ($response->successful()) {
            return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
        }

        return redirect()->back()->withErrors(['status' => $response->json('message', 'Registration failed. Please try again.')]);
    }

    public function forgotPasswordIndex()
    {
        return view('auth/forgot-password'); // Redirect to forgot password page
    }

    public function logout()
    {
        // Logic to handle logout
        return redirect()->route('login'); // Redirect to login page after logout
    }
}