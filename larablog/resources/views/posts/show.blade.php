@extends('layouts.app')

@section('content')

    <div class="post mb-3">
        <h1>{{ $post->title }}</h1>
        <hr>
        <p>{{ $post->content }}</p>
        <p>Author: {{ $post->author->name }}</p>
        <p>Published at: {{ $post->created_at->diffForHumans() }}</p>
        <a href="{{ route('home') }}" class="btn btn-secondary btn-sm">&#8592; Back</a>
    </div>

    <hr>

    <div class="features mb-4">
        <h4>Buy our premium features:</h4>

        @foreach($features as $feature) 
            <button class="btn btn-sm btn-secondary">{{ ucfirst($feature->name) }} {{ $feature->price }} &euro;</button>
        @endforeach
    </div>

    <hr>
    
    <div class="comments">
        <h4>Comments</h4>

        @if(empty($post->comments))
            <p>No comments yet.</p>
        @endif

        @each('comments._comment', $post->comments, 'comment')
    </div>
@endsection
