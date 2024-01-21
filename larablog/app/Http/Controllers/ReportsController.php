<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    // here we gonna create some reports for analytics
    public function withMostComments()
    {
        $posts = Post::withCount('comments')->orderBy('comments_count', 'desc')->take(5)->get();

        // And again i can cache this, so that i don't have to query the database every time
        // $minutes = 60;
        // $posts = Cache::remember('top_posts', $minutes, function () {
        //     return Post::withCount('comments')
        //     ->orderBy('comments_count', 'desc')
        //     ->take(5)
        //     ->get();
        // });


        return view('home', ['posts' => $posts]);
    }

    public function withMostPremiumFeatures()
    {
        $posts = Post::withCount('premiumFeatures')->orderBy('premium_features_count', 'desc')->take(5)->get();

        // And again i can cache this, so that i don't have to query the database every time
        // $minutes = 60;
        // $posts = Cache::remember('top_posts', $minutes, function () {
        //     return Post::withCount('premiumFeatures')
        //     ->orderBy('premium_features_count', 'desc')
        //     ->take(5)
        //     ->get();
        // });

        return view('home', ['posts' => $posts]);
    }
}
