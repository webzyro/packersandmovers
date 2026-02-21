<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|min:3',
            'email' => 'nullable|email',
            'phone' => [
                'regex:/^[6-9]\d{9}$/',
                'nullable',
            ],
            'from' => 'nullable|string|min:4',
            'to' => 'nullable|string|min:4',
            'when' => 'nullable|string',
            'distance' => 'nullable|string',
            'move_type' => 'nullable|string',
            'service_type' => 'nullable|string',
        ]);

        Contact::create($request->all());

        return redirect()->route('success');
    }
}
