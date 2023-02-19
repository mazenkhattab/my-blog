@extends('layouts.app')
@section('title') create @endsection
@section('content')
        <form method="POST" action="{{route('posts.store')}}">
          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title</label>
              <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Body</label>
                <input name="body" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
             
        </form>


        @endsection