<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function show(string $slug)
    {
        $route = Route::where('slug', $slug)->where('is_active', true)->firstOrFail();

        return view('routes.show', ['route' => $route]);
    }
}
