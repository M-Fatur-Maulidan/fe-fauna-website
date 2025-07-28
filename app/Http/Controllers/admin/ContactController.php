<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function destroy($id)
    {
        $accessToken = session('api_token')['accessToken'];
        $response = Http::withToken($accessToken)->delete(env('API_BASE_URL') . '/admin/contacts/' . $id);

        if ($response->failed()) {
            return redirect()->back()->withErrors(['status' => 'Failed to delete contact.']);
        } else {
            return redirect()->route('admin.contacts')->with('success', 'Contact deleted successfully.');
        }
    }
}
