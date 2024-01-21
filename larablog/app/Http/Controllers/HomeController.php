<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PremiumFeature;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request  $request)
    {
        $posts = Post::orderBy('created_at','desc')->paginate(25);

        if ($request->query('format') === 'json') { // example how we can return JSON responses that is paginated
            return $posts;
        }

        return view('home', ['posts' => $posts]);
    }

    public function show(Request $request, Post $post)
    {
        $post = $post->load(['author', 'comments']);

        // this is just an example, there are better ways to do this
        if ($request->query('format') === 'json') {
            return $post;
        }

        // since i defined connection in the model, i can just call all() here and it will work
        // $features = PremiumFeature::all(); // -> select * from features -> it knows which database to use

        // we can even cache the premium features, so that we don't have to query the database every time
        $features = Cache::remember('users', 60,  fn() => PremiumFeature::all());

        return view('posts.show', [
            'post' => $post,
            'features' => $features
        ]);
    }
}
