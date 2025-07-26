<?php

namespace App\Http\Controllers\portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('gallery/gallery'); // Return the gallery view
    }

    public function show($id)
    {
        // Logic to show a specific gallery item
        return view('gallery/detail-gallery', ['id' => $id]);
    }
}