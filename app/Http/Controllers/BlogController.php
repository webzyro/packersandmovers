<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('is_active', true)->latest()->paginate(9, ['id', 'image', 'title', 'slug']);

        return view('blog.index', ['blogs' => $blogs]);
    }

    public function show(string $slug)
    {
        $blog = Blog::where('slug', $slug)->where('is_active', true)->firstOrFail();

        $sidebarBlogs = Blog::where('is_active', true)->where('slug', '!=', $slug)->latest()->take(5)->get(['title', 'slug']);

        return view('blog.show', ['blog' => $blog, 'sidebarBlogs' => $sidebarBlogs]);
    }
}
