<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); // Assuming you have a view for the admin dashboard
    }
    public function usersIndex()
    {
        // Logic to fetch and display users
        return view('admin.users'); // Assuming you have a view for the admin users
    }
}