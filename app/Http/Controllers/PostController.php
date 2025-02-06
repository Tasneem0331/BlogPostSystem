<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = session('posts', []);
        return view('index', compact('posts'));
    }

    public function show($post_id)
    {
        $posts = session('posts', []);
        $post = $posts[$post_id] ?? null;
        return view('show', compact('post'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $posts = session('posts', []);
        $posts[] = [
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ];

        session(['posts' => $posts]);

        return redirect()->route('post.index');
    }
}

