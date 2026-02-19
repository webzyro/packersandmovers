<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $photos = Gallery::where('is_active', true)->latest()->get();

        return view('gallery', ['photos' => $photos]);
    }
}
