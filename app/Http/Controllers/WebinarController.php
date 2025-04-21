<?php

namespace App\Http\Controllers;

use App\Models\Webinar;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Str;

class WebinarController extends Controller
{
    public function index(Request $request)
    {
        $query = Webinar::query();

        // Search by title or description
        if ($search = $request->query('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        // Filter by platform
        if ($platform = $request->query('platform')) {
            $query->where('platform', $platform);
        }

        $webinars = $query->latest()->paginate(6);

        return view('webinars.index', compact('webinars'));
    }

    public function show(Webinar $webinar)
    {
        return view('webinars.show', compact('webinar'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'description' => 'required',
            'platform' => 'required',
            'banner' => 'image|max:2048|nullable',
        ]);

        if ($request->hasFile('banner')) {
            $data['banner_path'] = $request->file('banner')->store('banners', 'public');
        }

        $webinar = Webinar::create($data);

        if ($request->platform === 'Zoom') {
            $this->createZoomMeeting($webinar);
        }

        return redirect()->route('webinars');
    }

    protected function createZoomMeeting($webinar)
    {
        $client = new Client();
        $response = $client->post('https://api.zoom.us/v2/users/me/meetings', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('ZOOM_JWT_TOKEN'),
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'topic' => $webinar->title,
                'start_time' => $webinar->date . 'T' . $webinar->time,
                'password' => Str::random(10),
                'settings' => ['host_video' => true, 'participant_video' => true],
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        $webinar->update([
            'meeting_id' => $data['id'],
            'meeting_password' => $data['password'],
            'meeting_url' => $data['join_url'],
        ]);
    }
}
