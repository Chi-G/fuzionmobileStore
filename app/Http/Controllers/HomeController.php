<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use App\Models\Event;
use App\Models\Post;
use App\Models\Service;

class HomeController extends Controller {
    public function index() {
        $companyInfo = CompanyInfo::first();
        $services = Service::take(6)->get();
        $events = Event::where('date', '>=', now())->orderBy('date')->take(4)->get();
        $posts = Post::latest()->take(3)->get();

        return view('home', compact('companyInfo', 'services', 'events', 'posts'));
    }
}
