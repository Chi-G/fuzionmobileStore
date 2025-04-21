<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $query = Event::query();

        // Search by title or description
        if ($search = $request->query('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        // Filter by type
        if ($type = $request->query('type')) {
            $query->where('type', $type);
        }

        $events = $query->latest()->paginate(6);

        return view('events.index', compact('events'));
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function store(Request $request)
    {
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
        return redirect()->route('events');
    }
}
