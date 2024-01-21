@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ __('Read our latest posts:') }}</h2>
    <hr>

    @each('posts._post', $posts, 'post')
</div>

{{ $posts->links() }}

@endsection

