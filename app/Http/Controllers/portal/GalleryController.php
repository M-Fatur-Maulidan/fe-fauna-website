<?php

namespace App\Http\Controllers\portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GalleryController extends Controller
{
    public function index()
    {
        // Logic to fetch and display the gallery
        $response = Http::get(env('API_BASE_URL') . '/web/contents'); // Assuming you have an API endpoint to fetch gallery items
        
        if ($response->failed()) {
            return redirect()->back()->withErrors(['status' => 'Failed to fetch gallery items.']);
        } else {
            $galleryItems = $response->json()['data']; // Assuming the response is a JSON array of gallery items
            return view('gallery/gallery', ['items' => $galleryItems]); // Pass the items to the view
        }
    }

    public function show($id)
    {
        $response = Http::get(env('API_BASE_URL') . '/web/contents/' . $id);

        if ($response->failed()) {
            return redirect()->back()->withErrors(['status' => 'Failed to fetch gallery item.']);
        } else{
            $galleryItem = $response->json()['data'];
            return view('gallery/detail-gallery', ['item' => $galleryItem]);
        }
    }
}