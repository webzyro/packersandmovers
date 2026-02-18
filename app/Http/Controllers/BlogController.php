<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('is_active', true)->latest()->paginate(9);

        return view('blog.index', ['blogs' => $blogs]);
    }

    public function show(string $slug)
    {
        $blog = Blog::where('slug', $slug)->where('is_active', true)->firstOrFail();

        return view('blog.show', ['blog' => $blog]);
    }
}
