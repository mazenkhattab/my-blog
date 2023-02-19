<!-- posts.edit -->
@extends('layouts.app')
<form action="{{ route('updatePost', $post->id) }}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="title" value="{{ $post->title }}">
    <textarea name="body">{{ $post->body }}</textarea>
    <input type="submit" value="Submit">
</form>




   
@endsection

