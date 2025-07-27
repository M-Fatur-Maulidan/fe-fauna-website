<?php

namespace App\Http\Controllers\portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        return view('home/index'); // Return the home view
    }
    public function indexRegisterCollaborator() {
        $response = Http::post(env('API_BASE_URL') . '/web/invoices/payment/method-list');

        $responseUser = Http::withToken(session('api_token')['accessToken'])->get(env('API_BASE_URL') . '/web/users');

        if ($response->successful()) {
            $data = $response->json()['result']['Channels'];
            $dataUser = $responseUser->json()['data'];
            return view('home/register-collaborator', ['paymentMethods' => $data, 'userData' => $dataUser]);
        } else {
            return redirect()->back()->withErrors(['status' => 'Failed to fetch payment methods.']);
        }
    }
    public function indexRegisterInvoice(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'telepon' => 'required|string|max:15',
            'payment_method' => 'required|string',
        ]);

        $response = Http::withToken(session('api_token')['accessToken'])->post(env('API_BASE_URL') . '/web/invoices', [
            'nama' => $request->nama,
            'email' => $request->email,
            'phone' => $request->telepon,
            'channel' => $request->payment_method,
        ]);

        if ($response->failed()) {
            return redirect()->back()->withErrors(['status' => 'Failed to fetch payment methods.']);
        }

        $data = $response->json();

        return redirect()->route('invoice.index')->with('invoiceData', $data);

        // return view('home/register-invoice', ['paymentMethods' => $data]);
    }

    public function indexInvoice()
    {
        $data = session('invoiceData');

        return view('home/register-invoice', ['invoiceData' => $data]);
    }
}