<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller {
    public function index() {
        $events = Event::latest()->get();
        return view('events.index', compact('events'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'description' => 'required',
            'type' => 'required|in:virtual,physical',
            'banner' => 'image|max:2048',
            'location' => 'required_if:type,physical',
            'zoom_link' => 'required_if:type,virtual|url',
            'meeting_id' => 'nullable',
            'meeting_password' => 'nullable',
            'meeting_url' => 'nullable',
        ]);

        if ($request->hasFile('banner')) {
            $data['banner_path'] = $request->file('banner')->store('banners', 'public');
        }

        Event::create($data);
        return redirect()->route('events.index');
    }
}
