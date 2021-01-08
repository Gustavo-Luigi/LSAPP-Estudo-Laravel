@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary">Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>> Written on {{$post->created_at}}</small>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <div class="d-flex justify-content-between">
                <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
                <form action="/posts/{{$post->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </div>
        @endif
    @endif
@endsection