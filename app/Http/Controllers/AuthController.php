<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return redirect()->route('home'); // Redirect to home after login
    }

    public function logout()
    {
        // Logic to handle logout
        return redirect()->route('login'); // Redirect to login page after logout
    }
}