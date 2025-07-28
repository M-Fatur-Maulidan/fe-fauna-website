<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        $accessToken = session('api_token')['accessToken'];
        $response = Http::withToken($accessToken)->get(env('API_BASE_URL') . '/admin/dashboard');
        if ($response->failed()) {
            return redirect()->back()->withErrors(['status' => 'Failed to fetch dashboard data.']);
        }

        return view('admin.dashboard', ['dashboardData' => $response->json()]); // Assuming you have a view for the admin dashboard
    }
    public function usersIndex()
    {
        $accessToken = session('api_token')['accessToken'];
        $response = Http::withToken($accessToken)->get(env('API_BASE_URL') . '/admin/users');

        if ($response->failed()) {
            return redirect()->back()->withErrors(['status' => 'Failed to fetch users.']);
        } else {
            return view('admin.users.users')->with(['users' => $response->json()['data']]); // Assuming you have a view for the admin users
        }
        // Logic to fetch and display users
    }

    public function contentIndex() {
        $accessToken = session('api_token')['accessToken'];
        $response = Http::withToken($accessToken)->get(env('API_BASE_URL') . '/admin/contents');

        if ($response->failed()) {
            return redirect()->back()->withErrors(['status' => 'Failed to fetch contents.']);
        } else {
            return view('admin.content.content')->with(['contents' => $response->json()['data']]); // Assuming you have a view for the admin contents
        }
    }

    public function contactIndex() {
        $accessToken = session('api_token')['accessToken'];
        $response = Http::withToken($accessToken)->get(env('API_BASE_URL') . '/admin/contacts');

        if ($response->failed()) {
            return redirect()->back()->withErrors(['status' => 'Failed to fetch contacts.']);
        } else {
            return view('admin.contact.contact')->with(['contacts' => $response->json()['data']]); // Assuming you have a view for the admin contacts
        }
    }
}