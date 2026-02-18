<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)->latest()->take(4)->get(['title', 'slug', 'description']);

        $blogs = Blog::where('is_active', true)->latest()->take(3)->get(['image', 'title', 'slug']);

        return view('home', ['services' => $services, 'blogs' => $blogs]);
    }
}
