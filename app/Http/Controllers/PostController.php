<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
    public function index() {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'type' => 'required|in:blog,journal',
            'category' => 'required',
            'tags' => 'array|nullable',
            'image' => 'image|max:2048',
            'pdf' => 'file|mimes:pdf|max:2048|nullable',
        ]);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('posts', 'public');
        }
        if ($request->hasFile('pdf')) {
            $data['pdf_path'] = $request->file('pdf')->store('pdfs', 'public');
        }

        Post::create($data);
        return redirect()->route('posts');
    }
}
