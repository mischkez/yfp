<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <hr>
        <p class="card-text">{{ $post->content }}</p>
        <a href="{{ route('show_post', ['post' => $post]) }}" class="btn btn-primary">Read more...</a>
    </div>
</div>