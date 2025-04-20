<?php

namespace App\Http\Controllers;

use App\Models\Webinar;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Str;

class WebinarController extends Controller {
    public function index() {
        $webinars = Webinar::latest()->get();
        return view('webinars.index', compact('webinars'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'description' => 'required',
            'platform' => 'required',
        ]);

        $webinar = Webinar::create($data);

        if ($request->platform === 'Zoom') {
            $this->createZoomMeeting($webinar);
        }

        return redirect()->route('webinars');
    }

    protected function createZoomMeeting($webinar) {
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
