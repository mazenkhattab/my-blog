@extends('layouts.app')
@section('title') show @endsection
@section('content')
        <div class="row container ">
            <div class="w-100 bg-light  mt-2 border">
                Post info
            </div>
            <div class="w-100 bg-white border">
                <div class="100 bg-white mt-2 mb-2">
                Title: {{$post->title}}<br>
                body: {{$post->body}}<br>
                </div>
            </div>

	
         </div>
            

@endsection