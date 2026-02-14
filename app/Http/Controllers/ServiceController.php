<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)->latest()->get();

        return view('service.index', ['services' => $services]);
    }

    public function show(string $slug)
    {
        $sidebarServices = Service::where('slug', '!=', $slug)->where('is_active', true)->latest()->take(5)->get();
        $service = Service::where('slug', $slug)->where('is_active', true)->with('faqs')->firstOrFail();

        return view('service.show', ['service' => $service, 'sidebarServices' => $sidebarServices]);
    }
}
