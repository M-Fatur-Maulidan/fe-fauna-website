<?php

namespace App\Http\Controllers\portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function contactInsert(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $response = Http::post(env('API_BASE_URL') . '/web/contacts', [
            'nama' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } else {
            $errorMessage = $response->json('message', 'Failed to send message. Please try again later.');

            return redirect()->back()->withErrors(['status' => $errorMessage]);
        }
    }
}