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
        return view('admin.create_user'); // Assuming you have a view for creating users
    }

    public function store(Request $request)
    {
        // Logic to store new user data
        // Validate and save user data here
        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
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
        // Logic to delete user
        // Delete user by $id
        $response = Http::withToken(session('api_token')['accessToken'])
            ->delete(env('API_BASE_URL') . '/admin/users/' . $id);

        if ($response->failed()) {
            return redirect()->back()->withErrors(['status' => 'Failed to delete user.']);
        } else {
            return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
        }
    }
}
