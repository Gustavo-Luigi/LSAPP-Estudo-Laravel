@extends('layouts.app')

@section('content')
    <h1>Edit post</h1>
    <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class=="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{$post->title}}">
            <label for="body">Message</label>
            <textarea name="body" cols="30" rows="10" class="form-control" placeholder="Your message">{{$post->body}}</textarea>

            <input type="submit" value="Submit" class="btn-primary mt-3">
        </div>
    </form>
@endsection