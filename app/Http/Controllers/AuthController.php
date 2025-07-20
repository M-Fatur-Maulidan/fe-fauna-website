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

    public function register()
    {
        return view('auth/register'); // Redirect to registration page
    }

    public function forgotPassword()
    {
        return view('auth/forgot-password'); // Redirect to forgot password page
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $response = Http::post('http://127.0.0.1:3000/api/v1/auth/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);


        if ($response->successful()) {
            $data = $response->json();

            session(['api_token' => $data['data']['token']]);

            return redirect()->route('home');

        } else {
            $errorMessage = $response->json('message', 'Login gagal. Silakan cek kembali email dan password Anda.');

            return redirect()->back()->withErrors(['status' => $errorMessage]);
        }
    }

    public function logout()
    {
        // Logic to handle logout
        return redirect()->route('login'); // Redirect to login page after logout
    }
}