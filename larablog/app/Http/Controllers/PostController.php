<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    /**
     * Store a newly created resource in storage. Validation example.
     */
    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();

        // find the user that is currently logged in and create a post for that user
        $post = current_user()->posts()->create($validated); // of course if admin is creating a post, we don't need to do this

        return redirect()->route('posts.show', ['post' => $post->id]);
    }
}
