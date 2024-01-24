<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Blog\Category;

class PostController extends Controller
{
    public function create()
    {
        $categories = Category::all();

        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage. Validation example.
     */
    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();

        $post = auth()->user()->posts()->create($validated);

        return redirect()->route('show_post', ['post' => $post->id]);
    }
}
