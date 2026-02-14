<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CityPage;
use App\Models\Service;

class CityPageController extends Controller
{
    public function show(string $slug)
    {
        $city = CityPage::where('slug', $slug)->active()->with('faqs')->firstOrFail();
        $sidebarServices = Service::where('is_active', true)->latest()->take(5)->get();

        return view('city.show', compact('city', 'sidebarServices'));
    }
}
