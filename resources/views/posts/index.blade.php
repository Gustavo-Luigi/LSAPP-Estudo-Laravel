@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card p-3 mb-3">
                <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                <small>Created on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links('pagination::bootstrap-4')}}
    @else
        <p>No posts found.</p>
    @endif
@endsection