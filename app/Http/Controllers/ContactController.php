<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string|min:3',
            'email' => 'email',
            'phone' => 'min:10|max:15',
            'from' => 'string|min:4',
            'to' => 'string|min:4',
            'when' => 'string',
            'distance' => 'string',
            'move_type' => 'string',
            'service_type' => 'string',
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Thank you for your message!');
    }
}
