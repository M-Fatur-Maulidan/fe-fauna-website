<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login/login');
    }

    public function register()
    {
        return view('login/register'); // Redirect to registration page
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