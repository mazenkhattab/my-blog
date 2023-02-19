<!-- posts.index -->
@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <a href="{{ route('editPost', $post->id) }}">Edit post</a>
@endforeach