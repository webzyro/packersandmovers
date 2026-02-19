<?php

namespace App\Http\Controllers;

use App\Models\Faqs;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function index()
    {
        $faqs = Faqs::where('is_active', true)->latest()->get();

        return view('faqs', ['faqs' => $faqs]);
    }
}
