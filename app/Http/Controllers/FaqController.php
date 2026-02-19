<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::where('is_active', true)->latest()->get();

        return view('faqs', ['faqs' => $faqs]);
    }
}
