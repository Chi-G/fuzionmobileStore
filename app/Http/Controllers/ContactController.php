<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'number' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        Contact::create($data);

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}
