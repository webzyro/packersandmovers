<?php

namespace App\Http\Controllers;

use App\Models\CityService;
use App\Models\CityPage;
use App\Models\Service;

class CityPageController extends Controller
{
    public function show(string $slug)
    {
        $city = CityPage::where('slug', $slug)->active()->with('faqs')->firstOrFail();
        $sidebarServices = Service::where('is_active', true)->latest()->take(5)->get(['title', 'slug']);

        return view('city.show', compact('city', 'sidebarServices'));
    }

    public function service(string $slug, string $service_slug)
    {
        $service = CityService::whereRelation(
            'city',
            'slug',
            $slug
        )
            ->whereRelation('city', 'is_active', true)
            ->where('slug', $service_slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('city.service', compact('service'));
    }
}
