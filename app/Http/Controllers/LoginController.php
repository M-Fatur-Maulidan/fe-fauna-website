<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login/login');
    }

    public function login(Request $request)
    {
        // Logic for handling login
        // Validate the request, authenticate the user, etc.

        return redirect()->route('home'); // Redirect to home after login
    }
}