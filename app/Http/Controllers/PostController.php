<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::query();

        // Search by title or content
        if ($search = $request->query('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        // Filter by month/year
        if ($month = $request->query('month') && $year = $request->query('year')) {
            $query->whereMonth('created_at', $month)->whereYear('created_at', $year);
        }

        // Filter by tag
        if ($tag = $request->query('tag')) {
            $query->whereJsonContains('tags', $tag);
        }

        $posts = $query->latest()->paginate(6);
        $popularPosts = Post::latest()->take(3)->get();
        $archives = Post::selectRaw("strftime('%Y', created_at) as year, strftime('%m', created_at) as month, COUNT(*) as count")
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->get()
            ->toArray();
        $tags = Post::whereNotNull('tags')->pluck('tags')->flatten()->unique()->values()->toArray();

        return view('posts.index', compact('posts', 'popularPosts', 'archives', 'tags'));
    }

    public function show(Post $post)
    {
        $popularPosts = Post::latest()->take(3)->get();
        $archives = Post::selectRaw("strftime('%Y', created_at) as year, strftime('%m', created_at) as month, COUNT(*) as count")
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->get()
            ->toArray();
        $tags = Post::whereNotNull('tags')->pluck('tags')->flatten()->unique()->values()->toArray();

        return view('posts.details', compact('post', 'popularPosts', 'archives', 'tags'));
    }

    public function store(Request $request)
    {
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
